
@extends('layouts.front')
@section('title','SMK Sekar Bumi Nusantara')
@section('content')   

<style>
.container-image {
  position: relative;
}

.image {
  opacity: 1;
  display: block;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container-image:hover .image {
  opacity: 0.3;
}

.container-image:hover .middle {
  opacity: 1;
}

.text {
  background-color: #04AA6D;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>
 {{-- start slider --}}
    <div class="hero-slide owl-carousel site-blocks-cover">
      @foreach ($banner as $ban)
      <div class="intro-section" style="background-image: url('{{asset("images/slider/$ban->photo")}}');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>{{$ban->title}}</h1>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  {{-- end slider --}}
    

    <div></div>

    {{-- start prakata --}}
    <div class="site-section">
      <div class="container">
        <div class="row">
          {{-- kepala sekolah --}}
        <div class="col-md-12">
          {{-- <a href="{{route('page',$kepala->slug)}}"> --}}
            <div class="ftco-testimonial-1">
              <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                <div>
                  <h3>{{$kepala->title}}</h3>
                </div>
              </div>
              <div>
              <p class="text-justify">{!!$kepala->body!!}</p>
              </div>
            </div>
          {{-- </a> --}}
        </div>
        {{-- end kepala sekolah --}}

      </div>

      </div>
    </div>
    {{-- end prakata --}}
    

    
    <div class="news-updates">
      <div class="container">
         
        <div class="row">
          <div class="col-lg-12">
             <div class="section-heading">
              <h2 class="text-black">Berita Terbaru</h2>
              <a href="{{route('all-article')}}">Baca Semua</a>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="post-entry-big">
                  <a href="{{route('article',$terbaru->slug)}}" class="img-link"><img loading=”lazy” src='{{asset("images/berita/$terbaru->image")}}' alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta"> 
                      {{-- <a href="#">{{date('M, d-Y', strtotime($terbaru->created_at)) }}</a> --}}
                      <a href="{{route('article',$terbaru->slug)}}">{{ customTanggal($terbaru->created_at) }}</a>
                       {{-- //Output: "01 Maret 2019" --}}

                      {{-- <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a> --}}
                    </div>
                    <h3 class="post-heading"><a href="{{route('article',$terbaru->slug)}}">{{$terbaru->title}}</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                @foreach ($berita as $ber)
                <div class="post-entry-big horizontal d-flex mb-4">
                  <a href="{{route('article',$ber->slug)}}" class="img-link mr-4"><img loading=”lazy” src='{{asset("images/berita/$ber->image")}}' alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a href="{{route('article',$ber->slug)}}">{{customTanggal($ber->created_at)}}</a>
                    </div>
                    <h3 class="post-heading"><a href="{{route('article',$ber->slug)}}">{{$ber->title}}</a></h3>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<div class="site-section">
    <div class="container">


        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-6 mb-5">
                <h2 class="section-title-underline mb-3">
                    <span>Galeri Sekolah</span>
                </h2>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="owl-slide-3 owl-carousel">
                    @foreach ($photos as $photo)
                    <div class="course-1-item">
                        <figure class="thumnail">
                            <a href="{{asset("images/kegiatan/$photo->photo")}}" target="_blank"><img loading=”lazy” src='{{asset("images/kegiatan/$photo->photo")}}'
                                    alt="{{$photo->name}}" class="img-fluid"></a>
                        </figure>
                        <div class="course-1-content pb-4">
                            <h2>{{$photo->name}}</h2>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{route('all-photo')}}">Lihat Semua Galeri</a>

            </div>
        </div>
    </div>
</div>

  


  @endsection