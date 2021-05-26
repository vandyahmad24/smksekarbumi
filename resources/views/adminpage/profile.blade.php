@extends('layouts.admin')
@section('title','Halaman Profile SMK Sekar Bumi Nusantara')
@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Halaman Profile {{$user->name}}</h5>
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{route('change-profile')}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="{{$user->email}}" disabled>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Profile</button>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="car-title mb-0">Ganti Password</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('change-password')}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="firstPassword">Password Sekarang</label>
                    <input type="password" class="form-control" name="current_password" id="firstPassword" placeholder="Password Sekarang">
                    @if ($errors->has('current_password'))
                        <span class="text-danger">{{ $errors->first('current_password') }}</span>
                    @endif
                </div>

                <div class="form-group col-md-12">
                    <label for="password">Password Baru</label>
                    <input type="password" class="form-control" name="new_password" id="password" placeholder="Password Baru">
                    @if ($errors->has('new_password'))
                        <span class="text-danger">{{ $errors->first('new_password') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-12">
                    <label for="konfirmasi">Konfirmasi Password </label>
                    <input type="password" class="form-control" name="new_confirm_password" id="konfirmasi" placeholder="Password Sekarang">
                    @if ($errors->has('new_confirm_password'))
                        <span class="text-danger">{{ $errors->first('new_confirm_password') }}</span>
                    @endif
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>
</div>

@endsection