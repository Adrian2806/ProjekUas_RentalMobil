@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        PEMBAYARAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="col-lg-12">  
    <p align="left"><a href="{{route('bayaran.create')}}"><button type="submit" class="btn btn-primary">
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
                        <tr><th>Id Peminjaman</th><th>Tanggal Bayar</th><th>Biaya</th><th>Denda</th><th>Jumlah bayar</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($pembayaran as $in=>$val)
                        <tr><td>{{$val->id_peminjaman}}</td><td>{{$val->tgl_bayar}}</td><td>{{$val->biaya}}</td><td>{{$val->denda}}</td><td>{{$val->jumlah_bayar}}</td>
                        <td>
                        <a href="{{route('bayaran.edit',$val->id_pembayaran)}}"><span class="glyphicon glyphicon-pencil"></span></a>
                        <form action="{{route('bayaran.destroy', $val->id_pembayaran)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" ><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                        </td>
                       </tr>
                        @endforeach
                    </tbody>
                </table>
                
                {{$pembayaran->links()}}
    </div>
</div>
@endsection