@extends('layouts.admin')
@section('title','Jurusan SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Daftar Jurusan</h5>
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <a href="{{route('jurusan-add')}}" class="btn btn-primary mb-3">Tambah Jurusan</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Singkatan</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurusan as $jus)
                <tr>
                    <td>{{$jus->name}}</td>
                    <td>{{$jus->singkatan}}</td>
                    <td>{!!$jus->deskripsi ?: ""!!}</td>
                    <td> <a href="{{route('jurusan-edit',$jus->id)}}" class="btn btn-warning">Edit</a> 
                        <a href="{{route('jurusan-delete',$jus->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
     
    </div>
</div>

@endsection