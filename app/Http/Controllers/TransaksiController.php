<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;

use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('admin')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $title='Transaksi';
        $transaksi=Transaksi::paginate(5);
        return view('admin.dashboardtransaksi',compact('title','transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Transaksi';
        return view('admin.inputtransaksi',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required'=>'Kolom :attribute harus lengkap',
            'date'    =>'Kolom :attribute harus Tanggal',
            'numeric' =>'Kolom :attribute harus Angka',
        ];
        $validasi = $request->validate([ 
            'id_admin'=>'required',
            'id_customer'=>'required',
            'id_mobil'=>'required',
            'tgl_masuk'=>'date',
            'tgl_keluar'=>'date',
            'tgl_bayar'=>'date',
            'biaya'=>'required',
            'denda'=>'required',
            'jumlah_bayar'=>'required',
            'tempo'=>'date'

        ],$messages);

        Transaksi::create($validasi);
        return redirect('bayar')->with('succes','data berhasil di update');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title='Input Transaksi';
        $transaksi=Transaksi::find($id);
        return view('admin.inputtransaksi',compact('title','transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'required'=>'Kolom :attribute harus lengkap',
            'date'    =>'Kolom :attribute harus Tanggal',
            'numeric' =>'Kolom :attribute harus Angka',
        ];
        $validasi = $request->validate([ 
            'id_admin'=>'required',
            'id_customer'=>'required',
            'id_mobil'=>'required',
            'tgl_masuk'=>'date',
            'tgl_keluar'=>'date',
            'tgl_bayar'=>'date',
            'biaya'=>'required',
            'denda'=>'required',
            'jumlah_bayar'=>'required',
            'tempo'=>'date'
        ],$messages);

        Transaksi::whereid_transaksi($id)->update($validasi);
        return redirect('bayar')->with('succes','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaksi::whereid_transaksi($id)->delete();
        return redirect('bayar')->with('succes','data berhasil di update');
    }
}
