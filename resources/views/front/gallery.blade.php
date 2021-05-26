
@extends('layouts.front')
@section('title','Galeri Foto Sekolah')
@section('content')    



<div style="
margin-top: 100px;
margin-bottom: 150px;
">

<div class="site-section">
    <div class="container">
        <div class="row">
            @foreach ($gallery as $gal)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="{{asset("images/kegiatan/$gal->photo")}}" target="_blank"><img src='{{asset("images/kegiatan/$gal->photo")}}'
                                alt="{{$gal->name}}" class="img-fluid" loading=”lazy”></a>
                    </figure>
                    <div class="course-1-content pb-4">
                        <h2>{{$gal->name}}</h2>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection