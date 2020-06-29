<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Peminjaman;
class PeminjamanController extends Controller
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
        $title='Peminjaman';
        $peminjaman=Peminjaman::paginate(5);
        return view('admin.dashboardpeminjaman',compact('title','peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Peminjaman';
        return view('admin.inputpeminjaman',compact('title'));
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
            'required'=>'Kolom :attribute harus lengkap (contoh : 1 hari)',
            'date'    =>'Kolom :attribute harus Tanggal (contoh : 2020-06-01)',
            'numeric' =>'Kolom :attribute harus Angka',
        ];
        $validasi = $request->validate([ 
            'id_mobil'=>'numeric',
            'mobil_pinjam'=>'required',
            'tgl_masuk'=>'date',
            'tempo'=>'required',
            'tgl_keluar'=>'date'
        ],$messages);

        Peminjaman::create($validasi);
        return redirect('pinjam')->with('succes','data berhasil di update');
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
        $title='Input Peminjaman';
        $peminjaman=Peminjaman::find($id);
        return view('admin.inputpeminjaman',compact('title','peminjaman'));
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
            'required'=>'Kolom :attribute harus lengkap (contoh : 1 hari)',
            'date'    =>'Kolom :attribute harus Tanggal (contoh : 2020-06-01)',
            'numeric' =>'Kolom :attribute harus Angka',
        ];
        $validasi = $request->validate([ 
            'id_mobil'=>'numeric',
            'mobil_pinjam'=>'required',
            'tgl_masuk'=>'date',
            'tempo'=>'required',
            'tgl_keluar'=>'date'
        ],$messages);

        Peminjaman::whereid_peminjaman($id)->update($validasi);
        return redirect('pinjam')->with('succes','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peminjaman::whereid_peminjaman($id)->delete();
        return redirect('pinjam')->with('succes','data berhasil di update');
    }
}