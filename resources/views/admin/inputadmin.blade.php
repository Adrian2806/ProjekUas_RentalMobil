@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($admin))?route('admin1.update',$admin->id_admin):route('admin1.store')}}" method="POST">
        @csrf
        @if(isset($admin))@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">Nama Admin</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($admin))?$admin->nama_admin:old('nama_admin')}}" name="nama_admin" class="form-control">
                    @error('nama_admin')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Username Admin</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($admin))?$admin->username_admin:old('username_admin')}}" name="username_admin" class="form-control">
                    @error('username_admin')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Password Admin</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($admin))?$admin->password_admin:old('password_admin')}}" name="password_admin" class="form-control">
                    @error('password_admin')<small style="color:red">{{$message}}</small>@enderror
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