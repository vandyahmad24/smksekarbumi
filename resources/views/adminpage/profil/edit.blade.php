@extends('layouts.admin')
@section('title','Edit Profil SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Edit Profil</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('profile-sekolah-put')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">Judul</label>
                <input type="hidden" name="id" value="{{$profil->id}}">
                <input type="text" class="form-control" name="title" value="{{$profil->title}}">
                @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="form-label">Isi</label>
                <textarea class="form-control article-ckeditor" id="konten" name="body" rows="10">{{$profil->body}}</textarea>
                @if ($errors->has('body'))
                    <span class="text-danger">{{ $errors->first('body') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="photo" class="form-label">Foto</label><br>
                <input type="file" class="" name="photo" name="image">
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