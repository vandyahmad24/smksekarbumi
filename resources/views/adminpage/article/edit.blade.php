@extends('layouts.admin')
@section('title','Edit Article SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Edit Article</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('article-post')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">Judul</label>
                <input type="hidden" name="id" value="{{$article->id}}">
                <input type="text" class="form-control" name="title" value="{{$article->title}}">
                @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="form-label">Isi</label>
                <textarea class="form-control article-ckeditor" id="konten" name="body" rows="10">{{$article->body}}</textarea>
                @if ($errors->has('body'))
                    <span class="text-danger">{{ $errors->first('body') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="photo" class="form-label">Foto Utama</label><br>
                <input type="file" class="" name="photo" name="image">
                <br>
                <img src="{{asset("images/berita/$article->image")}}" class="img-fluid" width="55%" >
            </div>
            <div class="form-group">
                <label for="kategori" class="form-label">Artikel untuk Jurusan</label>
                <select name="id_category" id="" class="form-control">
                    <option value="">-</option>
                    @foreach ($jurusan as $jus)
                        <option value="{{$jus->id}}" @php if($jus->id==$article->id_category) echo "selected"  @endphp  >{{$jus->name}}</option>
                    @endforeach
                </select>
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