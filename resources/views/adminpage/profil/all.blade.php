@extends('layouts.admin')
@section('title','Profil SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Profil Web</h5>
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="alert-message">
                    {{ session('status') }}
                </div>
            </div>
        @endif
        <a href="{{route('profile-sekolah-add')}}" class="btn btn-primary mb-3">Tambah Page</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Ringkasan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profil as $prof)
                <tr>
                    <td>{{$prof->title}}</td>
                    <td>{!!$prof->excerpt!!}</td>
                    <td> <a href="{{route('profile-sekolah-edit',$prof->id)}}" class="btn btn-warning">Edit</a> 
                        @if($prof->slug!="prakata-kepala-sekolah") 
                            <a href="{{route('profile-sekolah-delete',$prof->id)}}" class="btn btn-danger">Delete</a>
                        @endif </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
     
    </div>
</div>

@endsection