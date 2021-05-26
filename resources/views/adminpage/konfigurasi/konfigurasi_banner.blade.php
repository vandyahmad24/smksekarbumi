@extends('layouts.admin')
@section('title','Konfigurasi SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Konfigurasi Banner</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('banner-put')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">Title</label>
                <input type="hidden" name="id" value="{{$banner->id}}">
                <textarea class="form-control" id="judul" name="title" cols="30" rows="10">{!!$banner->title!!}</textarea>
                @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="form-label">Body</label>
                <textarea class="form-control" id="konten" cols="30" rows="10" name="body">{!!$banner->body!!}</textarea>
                @if ($errors->has('body'))
                    <span class="text-danger">{{ $errors->first('body') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="photo" class="form-label">Foto Banner</label><br>
                <input type="file" class="" name="photo" name="image">
                <br>
                <br>
                <img src="{{asset("images/slider/$banner->photo")}}" class="img-fluid" width="30%" >
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
    document.addEventListener("DOMContentLoaded", function () {
        var judul = document.getElementById("judul");
            CKEDITOR.replace(judul,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;
    });
</script>

@endsection