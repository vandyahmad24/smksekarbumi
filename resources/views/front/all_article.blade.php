
@extends('layouts.front')
@section('title','Berita Terbaru')
@section('content')    


<div style="
margin-top: 100px;
margin-bottom: 150px;
">

<div class="site-section">
    <div class="container">
        @foreach ($articles as $article)
        <div class="row mb-5">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <img src="{{asset("images/berita/$article->image")}}" alt="Image" class="img-fluid"> 
            </div>
            <div class="col-lg-5 ml-auto align-self-center">
                <h2 class="section-title-underline mb-5">
                    <span> <a href="{{route('article',$article->slug)}}"> {{$article->title}}</a></span>
                </h2>
                <p> {{ customTanggal($article->created_at) }} </p>
                {!! $article->excerpt !!} ... <a href="{{route('article',$article->slug)}}">Lanjut Membaca</a>
            </div>
        </div>
        @endforeach
            {!! $articles->links() !!}
        
    </div>
</div>
</div>

@endsection