@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        PEMINJAMAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="col-lg-12">  
        <a href="{{route('custom.create')}}"></a> 
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
                        <tr><th>Id Peminjaman</th><th>Id Mobil</th><th>Mobil Dipesan</th><th>Tanggal Masuk</th><th>Tempo</th><th>Tanggal Keluar</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjaman as $in=>$val)
                        <tr><td>{{($in+1)}}</td><td>{{$val->id_mobil}}</td><td>{{$val->mobil_pinjam}}</td><td>{{$val->tgl_masuk}}</td><td>{{$val->tempo}}</td><td>{{$val->tgl_keluar}}</td>
                        <td>
                        <a href="{{route('pinjam.edit',$val->id_peminjaman)}}"><span class="glyphicon glyphicon-pencil"></span></a>
                        <form action="{{route('pinjam.destroy', $val->id_peminjaman)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" ><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                        </td>
                       </tr>
                        @endforeach
                    </tbody>
                </table>
                
                {{$peminjaman->links()}}
    </div>
</div>
@endsection