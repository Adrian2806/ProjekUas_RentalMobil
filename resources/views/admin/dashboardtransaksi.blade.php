@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        TRANSAKSI
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="col-lg-12">  
    <p align="left"><a href="{{route('bayar.create')}}"><button type="submit" class="btn btn-primary">
                     {{ __('Tambah Data') }}
                </button></span></a></p> 
                 <!-- search form -->
                 <form action="#" method="get" class="sidebar-form">
                      <div class="input-group">
                          <input type="text" name="q" class="form-control" placeholder="Search...">
                          <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                          </span>
                     </div>
                 </form>
                 <!-- /.search form -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>NO</th>
                        <th>ID ADMIN</th>
                        <th>ID CUSTOMER</th>
                        <th>ID MOBIL</th>
                        <th>TANGGAL MASUK</th>
                        <th>TANGGAL KELUAR</th>
                        <th>TANGGAL BAYAR</th>
                        <th>BIAYA</th>
                        <th>DENDA</th>
                        <th>JUMLAH BAYAR</th>
                        <th>TEMPO</th>
                        <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $in=>$val)
                        <tr>
                            <td>{{($in+1)}}</td>
                            <td>{{$val->id_admin}}</td>
                            <td>{{$val->id_customer}}</td>
                            <td>{{$val->id_mobil}}</td>
                            <td>{{$val->tgl_masuk}}</td>
                            <td>{{$val->tgl_keluar}}</td>
                            <td>{{$val->tgl_bayar}}</td>
                            <td>{{$val->biaya}}</td>
                            <td>{{$val->denda}}</td>
                            <td>{{$val->jumlah_bayar}}</td>
                            <td>{{$val->tempo}}</td>
                        <td>
                        <a href="{{route('bayar.edit',$val->id_transaksi)}}"><span class="glyphicon glyphicon-pencil"></span></a>
                        <form action="{{route('bayar.destroy', $val->id_transaksi)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" ><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                        </td></tr>
                        @endforeach
                    </tbody>
                </table>
                
                {{$transaksi->links()}}
    </div>
</div>
@endsection