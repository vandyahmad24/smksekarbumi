@extends('layouts.admin')
@section('title','Edit galeri SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Edit galeri</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('galeri-put')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">Judul</label>
                <input type="hidden" name="id" value="{{$galeri->id}}">
                <input type="text" class="form-control" name="name" value="{{$galeri->name}}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="photo" class="form-label">Foto</label><br>
                <input type="file" class="" name="photo" name="image">
                <br>
                <img src="{{asset("images/kegiatan/$galeri->photo")}}" class="img-fluid" width="50%">
            </div>
            <div class="form-group">
                <label for="kategori" class="form-label">Foto untuk Jurusan</label>
                <select name="id_category" id="" class="form-control">
                    <option value="">-</option>
                    @foreach ($jurusan as $jus)
                        <option value="{{$jus->id}}" @php if($jus->id==$galeri->id_category) echo "selected"  @endphp  >{{$jus->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>


@endsection