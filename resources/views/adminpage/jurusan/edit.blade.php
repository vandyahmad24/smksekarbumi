@extends('layouts.admin')
@section('title','Edit Jurusan SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Edit Jurusan </h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('jurusan-put')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">Nama Jurusan</label>
                <input type="hidden" name="id" value="{{$jurusan->id}}">
                <input type="text" class="form-control" name="name" value="{{$jurusan->name}}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="form-label">Singkatan Jurusan</label>
                <input type="text" class="form-control" name="singkatan" value="{{$jurusan->singkatan}}">
                @if ($errors->has('singkatan'))
                    <span class="text-danger">{{ $errors->first('singkatan') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control article-ckeditor" id="konten" name="deskripsi" rows="10">{{$jurusan->deskripsi}}</textarea>
                @if ($errors->has('deskripsi'))
                    <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var konten = document.getElementById("konten");
            CKEDITOR.replace(konten,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;
    });
</script>


@endsection