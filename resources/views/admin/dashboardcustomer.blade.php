@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        CUSTOMER
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
<div class="col-lg-12">  
    <p align="left"><a href="{{route('custom.create')}}"><button type="submit" class="btn btn-primary">
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
                        <tr><th>NO</th><th>NAMA CUSTOMER</th><th>ALAMAT CUSTOMER</th><th>NIK</th><th>NO. TELEPON</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($customer as $in=>$val)
                        <tr><td>{{($in+1)}}</td><td>{{$val->nama_customer}}</td><td>{{$val->alamat_customer}}</td><td>{{$val->NIK}}</td><td>{{$val->no_telp}}</td>
                        <td>
                        <a href="{{route('custom.edit',$val->id_customer)}}"><span class="glyphicon glyphicon-pencil"></span></a>
                        <form action="{{route('custom.destroy', $val->id_customer)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" ><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                        </td></tr>
                        @endforeach
                    </tbody>
                </table>
                
                {{$customer->links()}}
    </div>
</div>
@endsection