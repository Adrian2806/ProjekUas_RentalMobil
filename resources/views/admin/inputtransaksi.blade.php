@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Transaksi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($transaksi))?route('bayar.update',$transaksi->id_transaksi):route('bayar.store')}}" method="POST">
        @csrf
        @if(isset($transaksi))@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">ID ADMIN</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->id_admin:old('id_admin')}}" name="id_admin" class="form-control">
                    @error('id_admin')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">ID CUSTOMER</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->id_customer:old('id_customer')}}" name="id_customer" class="form-control">
                    @error('id_customer')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">ID MOBIL</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->id_mobil:old('id_mobil')}}" name="id_mobil" class="form-control">
                    @error('id_mobil')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">TANGGAL MASUK</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->tgl_masuk:old('tgl_masuk')}}" name="tgl_masuk" class="form-control">
                    @error('tgl_masuk')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">TANGGAL KELUAR</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->tgl_keluar:old('tgl_keluar')}}" name="tgl_keluar" class="form-control">
                    @error('tgl_keluar')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">TANGGAL BAYAR</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->tgl_bayar:old('tgl_bayar')}}" name="tgl_bayar" class="form-control">
                    @error('tgl_bayar')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">BIAYA</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->biaya:old('biaya')}}" name="biaya" class="form-control">
                    @error('biaya')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">DENDA</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->denda:old('denda')}}" name="denda" class="form-control">
                    @error('denda')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">JUMLAH BAYAR</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->jumlah_bayar:old('jumlah_bayar')}}" name="jumlah_bayar" class="form-control">
                    @error('jumlah_bayar')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">TEMPO</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->tempo:old('tempo')}}" name="tempo" class="form-control">
                    @error('tempo')<small style="color:red">{{$message}}</small>@enderror
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