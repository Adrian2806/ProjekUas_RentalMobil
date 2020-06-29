@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Mobil
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($mobil))?route('rental.update',$mobil->id_mobil):route('rental.store')}}" method="POST">
        @csrf
        @if(isset($mobil))@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">Merk Mobil</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($mobil))?$mobil->merk_mobil:old('merk_mobil')}}" name="merk_mobil" class="form-control">
                    @error('merk_mobil')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Plat Mobil</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($mobil))?$mobil->plat_mobil:old('plat_mobil')}}" name="plat_mobil" class="form-control">
                    @error('plat_mobil')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Warna Mobil</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($mobil))?$mobil->warna_mobil:old('warna_mobil')}}" name="warna_mobil" class="form-control">
                    @error('warna_mobil')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Tahun Mobil</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($mobil))?$mobil->tahun_mobil:old('tahun_mobil')}}" name="tahun_mobil" class="form-control">
                    @error('tahun_mobil')<small style="color:red">{{$message}}</small>@enderror
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