@extends('layouts.admin')
@section('title','Halaman Admin SMK Sekar Bumi Nusantara')
@section('content')

<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3>Selamat Datang {{Auth::user()->name}}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">Artikel</h3>
                            <div class="mb-0">
                               Jumlah Artikel yang telah anda buat
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="stat">
                                <h1>{{$artikel}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">Galeri</h3>
                            <div class="mb-0">
                               Jumlah Galeri yang telah anda buat
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="stat">
                                <h1>{{$galeri}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">Siswa</h3>
                            <div class="mb-0">
                               Jumlah Siswa
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="stat">
                                <h1>{{$siswa}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">Siswa</h3>
                            <div class="mb-0">
                               Jumlah Siswa Lulus
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="stat">
                                <h1>{{$siswa_lulus}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">Siswa</h3>
                            <div class="mb-0">
                               Jumlah Siswa Tidak Lulus
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="stat">
                                <h1>{{$siswa_tidak_lulus}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>

</div>
@endsection