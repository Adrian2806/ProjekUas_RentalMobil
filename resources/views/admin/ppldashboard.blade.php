@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        BERANDA
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
@csrf
<div class="panel panel-flat border-top-lg border-top-primary">
    <div class="panel-body">
        <div class="col-lg-12"> 
            <div class="user-panel">
                  
                                <div class="_3ZDC1p _1tDEiO"><img src="/adminlte/img/Mobil master.jpg" width="205px" height="150px">
                                </div>
                                <div class="_3eufr2">
                                    <div class="O6wiAW" data-sqe="name">
                                        <div class="_1NoI8_ _16BAGk">Honda Jazz &amp; Merah maron tahun 2018</div>
                                    </div>
                                    <div class="_2lBkmX">
                                        <div class="_1w9jLI _37ge-4 _2ZYSiu">
                                        <span class="lwZ9D8">Rp</span>
                                        <span class="_341bF0">350.000</span> - <span class="lwZ9D8"></span><span class="_341bF0">/hari</span>
                                    </div>
                                    <p align="left"><a href="{{route('pinjam.create')}}">
                                          <button type="submit" class="btn btn-primary">
                                          {{ __('Pesan') }}
                                          </button></span></a>
                                    </p> 
                                </div>
                                <div class="_3ZDC1p _1tDEiO"><img src="/adminlte/img/Mobil master.jpg" width="205px" height="150px">
                                </div>
                                <div class="_3eufr2">
                                    <div class="O6wiAW" data-sqe="name">
                                        <div class="_1NoI8_ _16BAGk">Honda Jazz &amp; Merah maron tahun 2018</div>
                                    </div>
                                    <div class="_2lBkmX">
                                        <div class="_1w9jLI _37ge-4 _2ZYSiu">
                                        <span class="lwZ9D8">Rp</span>
                                        <span class="_341bF0">350.000</span> - <span class="lwZ9D8"></span><span class="_341bF0">/hari</span>
                                    </div>
                                    <p align="left"><a href="{{route('pinjam.create')}}">
                                          <button type="submit" class="btn btn-primary">
                                          {{ __('Pesan') }}
                                          </button></span></a>
                                    </p> 
                                </div>
                               
                       
            </div>
        </div>
    </div>
</div>

@endsection