@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Pembayaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($pembayaran))?route('bayaran.update',$pembayaran->id_pembayaran):route('bayaran.store')}}" method="POST">
        @csrf
        @if(isset($pembayaran))@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">Id Peminjaman</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($pembayaran))?$pembayaran->id_peminjaman:old('id_peminjaman')}}" name="id_peminjaman" class="form-control">
                    @error('id_peminjaman')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Tanggal Bayar</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($pembayaran))?$pembayaran->tgl_bayar:old('tgl_bayar')}}" name="tgl_bayar" class="form-control">
                    @error('tgl_bayar')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Biaya</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($pembayaran))?$pembayaran->biaya:old('biaya')}}" name="biaya" class="form-control">
                    @error('biaya')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Denda</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($pembayaran))?$pembayaran->denda:old('denda')}}" name="denda" class="form-control">
                    @error('denda')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Jumlah Bayar</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($pembayaran))?$pembayaran->jumlah_bayar:old('jumlah_bayar')}}" name="jumlah_bayar" class="form-control">
                    @error('jumlah_bayar')<small style="color:red">{{$message}}</small>@enderror
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