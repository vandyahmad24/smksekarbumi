
@extends('layouts.front')
@section('title','Halaman Kelulusan')
@section('content')    


<div class="site-section" style="margin-top: 150px">
    <div class="container">

        <form action="{{route('cek-nilai')}}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="nisn">NISN</label>
                            <input type="number" id="nisn" name="nisn" class="form-control form-control-lg" placeholder="Masukan NISN" value="{{old('nisn')}}">
                            <small>Masukan NISN Anda</small>
                        </div>
                        @if (session('gagal'))
                            <div class="col-md-12 form-group">
                                <div class="alert alert-danger" role="alert">
                                    {!! session('gagal') !!}
                                </div>
                            </div>
                        @endif
                        @if (session('lulus'))
                            <div class="col-md-12 form-group">
                                <div class="alert alert-success" role="alert">
                                    {!! session('lulus') !!}
                                </div>
                            </div>
                        @endif
                        
                        @if ($errors->any())
                        <div class="col-md-12 form-group">
                            <div class="alert alert-warning" role="alert">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    @endif

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Lihat Nilai</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

      
    </div>
</div>
@endsection