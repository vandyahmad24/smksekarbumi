@extends('layouts.admin')
@section('title','Add galeri SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Add galeri</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('galeri-post')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="photo" class="form-label">Foto</label><br>
                <input type="file" class="" name="photo" name="image">
            </div>
            <div class="form-group">
                <label for="kategori" class="form-label">Foto untuk Jurusan</label>
                <select name="id_category" id="" class="form-control">
                    <option value="">-</option>
                    @foreach ($jurusan as $jus)
                        <option value="{{$jus->id}}">{{$jus->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>


@endsection