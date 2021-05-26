@extends('layouts.admin')
@section('title','Berita SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Daftar Article</h5>
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <a href="{{route('article-add')}}" class="btn btn-primary mb-3">Tambah Article</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Ringkasan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $ar)
                <tr>
                    <td>{{$ar->title}}</td>
                    <td>{!!$ar->excerpt!!}</td>
                    <td><img src="{{asset("images/berita/$ar->image")}}" loading=”lazy” class="img-fluid" width="50%"></td>
                    <td> <a href="{{route('article-edit',$ar->id)}}" class="btn btn-warning">Edit</a> 
                        <a href="{{route('article-delete',$ar->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$articles->links()}}
     
    </div>
</div>

@endsection