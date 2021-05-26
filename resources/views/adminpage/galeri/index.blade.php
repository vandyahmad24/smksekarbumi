@extends('layouts.admin')
@section('title','Galeri SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Daftar Galeri</h5>
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <a href="{{route('galeri-add')}}" class="btn btn-primary mb-3">Tambah Foto</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galeri as $gl)
                <tr>
                    <td>{{$gl->name}}</td>
                    <td><img src="{{asset("images/kegiatan/$gl->photo")}}" loading=”lazy” class="img-fluid" width="50%"></td>
                    <td> <a href="{{route('galeri-edit',$gl->id)}}" class="btn btn-warning">Edit</a> 
                        <a href="{{route('galeri-delete',$gl->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$galeri->links()}}
     
    </div>
</div>

@endsection