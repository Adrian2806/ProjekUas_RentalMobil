<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Pembayaran;
class PembayaranController extends Controller
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
        $title='Pembayaran';
        $pembayaran=Pembayaran::paginate(5);
        return view('admin.dashboardpembayaran',compact('title','pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Pembayaran';
        return view('admin.inputpembayaran',compact('title'));
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
            'date'    =>'Kolom :attribute harus Tanggal (contoh : 2020-06-01)',
            'numeric' =>'Kolom :attribute harus Angka (contoh untuk biaya, denda, jumlah bayar : 150.000)',
        ];
        $validasi = $request->validate([ 
            'id_peminjaman'=>'numeric',
            'tgl_bayar'=>'date',
            'biaya'=>'numeric',
            'denda'=>'numeric',
            'jumlah_bayar'=>'numeric'
        ],$messages);

        Pembayaran::create($validasi);
        return redirect('bayaran')->with('succes','data berhasil di update');
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
        $title='Input Pembayaran';
        $pembayaran=Pembayaran::find($id);
        return view('admin.inputpembayaran',compact('title','pembayaran'));
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
            'date'    =>'Kolom :attribute harus Tanggal (contoh : 2020-06-01)',
            'numeric' =>'Kolom :attribute harus Angka (contoh untuk biaya, denda, jumlah bayar : 150.000)',
        ];
        $validasi = $request->validate([ 
            'id_peminjaman'=>'numeric',
            'tgl_bayar'=>'date',
            'biaya'=>'numeric',
            'denda'=>'numeric',
            'jumlah_bayar'=>'numeric'
        ],$messages);

        Pembayaran::whereid_pembayaran($id)->update($validasi);
        return redirect('bayaran')->with('succes','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pembayaran::whereid_pembayaran($id)->delete();
        return redirect('bayaran')->with('succes','data berhasil di update');
    }
}