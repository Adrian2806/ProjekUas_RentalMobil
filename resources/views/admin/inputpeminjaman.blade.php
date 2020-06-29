@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Peminjaman
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($peminjaman))?route('pinjam.update',$peminjaman->id_peminjaman):route('pinjam.store')}}" method="POST">
        @csrf
        @if(isset($peminjaman))@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">Id Mobil</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($peminjaman))?$peminjaman->id_mobil:old('id_mobil')}}" name="id_mobil" class="form-control">
                    @error('id_mobil')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Mobil Dipesan</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($peminjaman))?$peminjaman->mobil_pinjam:old('mobil_pinjam')}}" name="mobil_pinjam" class="form-control">
                    @error('mobil_pinjam')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Tanggal Masuk</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($peminjaman))?$peminjaman->tgl_masuk:old('tgl_masuk')}}" name="tgl_masuk" class="form-control">
                    @error('tgl_masuk')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Tempo</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($peminjaman))?$peminjaman->tempo:old('tempo')}}" name="tempo" class="form-control">
                    @error('tempo')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Tanggal Keluar</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($peminjaman))?$peminjaman->tgl_keluar:old('tgl_keluar')}}" name="tgl_keluar" class="form-control">
                    @error('tgl_keluar')<small style="color:red">{{$message}}</small>@enderror
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit">SIMPAN</button>
            </div>
        </div>

    </form>    
    </div>
</div>    
@endsection