@extends('layouts.admin')
@section('title','Konfigurasi SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Konfigurasi Web</h5>
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($configs as $config)
                <tr>
                    <td>{{$config->title}}</td>
                    <td>{{$config->isi}}</td>
                    <td> <a href="{{route('konfigurasi-edit',$config->id)}}" class="btn btn-warning">Edit</a> </td>
                </tr>
                @endforeach
                <tr>
                    <td>Banner</td>
                    <td> <img src="{{asset("images/slider/$banner->photo")}}" class="img-fluid" width="40%"> </td>
                    <td> <a href="{{route('banner-edit',$banner->id)}}" class="btn btn-warning">Edit</a> </td>
                </tr>
               
            </tbody>
        </table>
     
    </div>
</div>

@endsection