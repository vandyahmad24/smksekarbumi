@extends('layouts.front')
@section('title',"$page->title")
@section('content')    


<div style="
margin-top: 50px;
margin-bottom: 150px;
">

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <center>
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <img src="{{asset("images/berita/$page->image")}}" alt="Image" class="img-fluid"> 
                </div>
            </center>
            <div class="col-lg-12 ml-auto align-self-center mt-5">
                <h2 class="section-title-underline mb-5">
                    <span> {{$page->title}}</span>
                </h2>
                <p> {{ customTanggal($page->created_at) }} </p>
                {!! $page->body !!}
            </div>
        </div>
       
        
    </div>
</div>
</div>

@endsection