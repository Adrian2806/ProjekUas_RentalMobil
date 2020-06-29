@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        ADMIN
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
<div class="col-lg-12">  
    <p align="left"><a href="{{route('admin1.create')}}"><button type="submit" class="btn btn-primary">
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
                        <tr><th>NO</th><th>NAMA ADMIN</th><th>USERNAME ADMIN</th><th>PASSWORD ADMIN</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($admin as $in=>$val)
                        <tr><td>{{($in+1)}}</td><td>{{$val->nama_admin}}</td><td>{{$val->username_admin}}</td><td>{{$val->password_admin}}</td>
                        <td>
                        <a href="{{route('admin1.edit',$val->id_admin)}}"><span class="glyphicon glyphicon-pencil"></span></a>
                        <form action="{{route('admin1.destroy', $val->id_admin)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" ><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                        </td></tr>
                        @endforeach
                    </tbody>
                </table>
                
                {{$admin->links()}}
    </div>
</div>
@endsection