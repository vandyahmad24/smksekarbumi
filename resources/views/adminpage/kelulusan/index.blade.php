@extends('layouts.admin')
@section('title','Daftar Kelulusan SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Daftar Kelulusan</h5>
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
        <a href="{{route('kelulusan-add')}}" class="btn btn-primary mb-3">Tambah Siswa</a>
        <table class="table table-bordered datatables">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tempat / tanggal lahir</th>
                    <th>Nama Orang tua</th>
                    <th>NIS</th>
                    <th>NISN</th>
                    <th>Kelulusan</th>
                    <th>Tahun Lulus</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($kelulusan as $kel)
                <tr>
                    <td>{{$kel->nama}}</td>
                    <td>{{$kel->tempat_lahir}} / {{  date('d-m-Y', strtotime($kel->tanggal_lahir)) }}</td>
                    <td>{{$kel->orang_tua}}</td>
                    <td>{{$kel->nis}}</td>
                    <td>{{$kel->nisn}}</td>
                    <td>{{$kel->tahun_lulus}}</td>
                    <td>{{$kel->kelulusan==1 ? "Lulus":"Tidak Lulus"}}</td>
                    <td>{{$kel->jurusan->name}}</td>
                    <td> <a href="{{route('kelulusan-edit',$kel->id)}}" class="btn btn-warning">Edit</a> 
                        <a href="{{route('kelulusan-delete',$kel->id)}}" class="btn btn-danger">Hapus</a>
                       </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
     
    </div>
</div>

@endsection