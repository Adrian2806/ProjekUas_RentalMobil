<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Mobil;
class MobilController extends Controller
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
        $title='Mobil';
        $mobil=Mobil::paginate(5);
        return view('admin.dashboard',compact('title','mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Mobil';
        return view('admin.inputmobil',compact('title'));
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
            'merk_mobil'=>'required',
            'plat_mobil'=>'required',
            'warna_mobil'=>'required',
            'tahun_mobil'=>'required'
        ],$messages);

        Mobil::create($validasi);
        return redirect('rental')->with('succes','data berhasil di update');
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
        $title='Input Mobil';
        $mobil=Mobil::find($id);
        return view('admin.inputmobil',compact('title','mobil'));
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
            'merk_mobil'=>'required',
            'plat_mobil'=>'required',
            'warna_mobil'=>'required',
            'tahun_mobil'=>'required'
        ],$messages);

        Mobil::whereid_mobil($id)->update($validasi);
        return redirect('rental')->with('succes','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mobil::whereid_mobil($id)->delete();
        return redirect('rental')->with('succes','data berhasil di update');
    }
}
