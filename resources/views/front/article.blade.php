
@extends('layouts.front')
@section('title',"Berita $article->title")
@section('content')    


<div style="
margin-top: 100px;
margin-bottom: 150px;
">

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <center>
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <img src="{{asset("images/berita/$article->image")}}" alt="Image" class="img-fluid"> 
                </div>
            </center>
            <div class="col-lg-12 ml-auto align-self-center">
                <h2 class="section-title-underline mb-5">
                    <span> {{$article->title}}</span>
                </h2>
                <p> {{ customTanggal($article->created_at) }} </p>
                {!! $article->body !!}
            </div>
        </div>
        <a href="{{route('all-article')}}"> <- Baca Semua Artikel</a>
 
        
    </div>
</div>
</div>

@endsection