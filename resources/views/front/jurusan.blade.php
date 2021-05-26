@extends('layouts.front')
@section('title',"Jurusan $jrn->name")
@section('content')    


<div style="
margin-top: 100px;
margin-bottom: 150px;
">

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 ml-auto align-self-center mt-5">
                <h2 class="section-title-underline mb-5">
                    <span> {{$jrn->name}} || {{$jrn->singkatan}}</span>
                </h2>
                {!! $jrn->deskripsi !!}
            </div>
        </div>
       
        
    </div>
</div>
</div>

@endsection