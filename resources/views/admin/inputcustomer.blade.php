@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Customer
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($customer))?route('custom.update',$customer->id_customer):route('custom.store')}}" method="POST">
        @csrf
        @if(isset($customer))@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">Nama Costumer</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($customer))?$customer->nama_customer:old('nama_customer')}}" name="nama_customer" class="form-control">
                    @error('nama_customer')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Alamat Customer</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($customer))?$customer->alamat_customer:old('alamat_customer')}}" name="alamat_customer" class="form-control">
                    @error('alamat_customer')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">NIK</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($customer))?$customer->NIK:old('NIK')}}" name="NIK" class="form-control">
                    @error('NIK')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">NO. TELEPON</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($customer))?$customer->no_telp:old('no_telp')}}" name="no_telp" class="form-control">
                    @error('no_telp')<small style="color:red">{{$message}}</small>@enderror
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