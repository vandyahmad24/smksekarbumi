@extends('layouts.admin')
@section('title','Konfigurasi SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Konfigurasi {{$config->title}}</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('konfigurasi-put')}}">
            @csrf
            <div class="form-group">
                <label class="form-label">Isi {{$config->title}}</label>
                <input type="hidden" name="id" value="{{$config->id}}">
                <input type="text" class="form-control" name="isi" value="{{$config->isi}}">
                @if($config->title)
                <small> <span class="text-danger">PERHATIAN</span>  <b> Link Harus Berawal wwww contoh <span class="text-success">www.google.com</span> bukan  <span class="text-danger">http:// maupun https://</span>  </b> </small>
                @endif

                @if ($errors->has('isi'))
                    <span class="text-danger">{{ $errors->first('isi') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</div>

@endsection