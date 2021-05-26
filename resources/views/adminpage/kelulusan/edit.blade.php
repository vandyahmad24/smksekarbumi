@extends('layouts.admin')
@section('title','Tambah kelulusan SMK Sekar Bumi Nusantara')
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Tambah kelulusan </h5>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action="{{route('kelulusan-put')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Nama Siswa</label>
                    <input type="hidden" name="id" value="{{$kelulusan->id}}">
                    <input type="text" class="form-control" name="nama" value="{{$kelulusan->nama}}">
                    @if ($errors->has('nama'))
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir"  placeholder="Tempat Lahir" name="tempat_lahir" value="{{$kelulusan->tempat_lahir}}">
                        @if ($errors->has('tempat_lahir'))
                            <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$kelulusan->tanggal_lahir}}">
                        @if ($errors->has('tanggal_lahir'))
                            <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Nama Orang Tua</label>
                    <input type="text" class="form-control" name="orang_tua" value="{{$kelulusan->orang_tua}}">
                    @if ($errors->has('orang_tua'))
                        <span class="text-danger">{{ $errors->first('orang_tua') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="form-label">NIS</label>
                    <input type="text" class="form-control" name="nis" value="{{$kelulusan->nis}}">
                    @if ($errors->has('nis'))
                        <span class="text-danger">{{ $errors->first('nis') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="form-label">NISN</label>
                    <input type="text" class="form-control" name="nisn" value="{{$kelulusan->nisn}}">
                    @if ($errors->has('nisn'))
                        <span class="text-danger">{{ $errors->first('nisn') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="form-label">Jurusan</label>
                    <select name="id_jurusan" class="form-control">
                        @foreach ($jurusan as $jus)
                        <option value="{{$jus->id}}"  @php if($jus->id==$kelulusan->id_jurusan) echo "selected"  @endphp >{{$jus->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('id_jurusan'))
                        <span class="text-danger">{{ $errors->first('id_jurusan') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="form-label">Tahun Lulus</label>
                    <input type="number" class="form-control" name="tahun_lulus" value="{{$kelulusan->tahun_lulus}}">
                    @if ($errors->has('tahun_lulus'))
                        <span class="text-danger">{{ $errors->first('tahun_lulus') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="form-label">Kelulusan</label>
                    <select name="kelulusan" class="form-control">
                       <option value="1" @php if($kelulusan->kelulusan==1) echo "selected"  @endphp >Lulus</option>
                       <option value="0" @php if($kelulusan->kelulusan==0) echo "selected"  @endphp>Tidak Lulus</option>
                    </select>
                    @if ($errors->has('kelulusan'))
                        <span class="text-danger">{{ $errors->first('kelulusan') }}</span>
                    @endif
                </div>
                {{-- <div class="form-group">
                    <label class="form-label">Surat Keterangan Lulus</label>
                    <input type="number" class="form-control" name="link" value="{{old('link')}}" placeholder="Link Surat Keterangan Lulus">
                    <small>Link Surat Keterangan Lulus</small>
                    @if ($errors->has('link'))
                        <span class="text-danger">{{ $errors->first('link') }}</span>
                    @endif
                </div> --}}
                
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>



@endsection