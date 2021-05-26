@extends('layouts.front')
@section('title','SMK SEKAR BUMI NUSANTARA')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center" style="background-image: url('{{asset("images/slider/$banner->photo")}}');">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>{!!$banner->title!!}</h1>
      <h2>{!!$banner->body!!}</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          {{-- <h2>About</h2> --}}
          <p>Sambutan</p>
        </div>

        <div class="row">
          {{-- <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('front/img/about.jpg')}}" class="img-fluid" alt="">
          </div> --}}
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>{{$kepala->title}}</h3>
            <p class="font-italic">
              {!!$kepala->body!!}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Artikel</h2>
          <p>Berita Terbaru</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @foreach ($berita as $ber)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
             <a href="{{route('article',$ber->slug)}}"><img src="{{asset("images/berita/$ber->image")}}" class="img-fluid" alt="{{$ber->title}}"></a> 
              <div class="course-content">
                <h3><a href="{{route('article',$ber->slug)}}">{{$ber->title}}</a></h3>
                <p>{!!$ber->excerpt!!}....</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <span>{{customTanggal($ber->created_at)}}</span>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
          @endforeach
       
        </div>
        <br>
        <br>
        <a href="{{route('all-article')}}" class="mt-3">Baca Selengkapnya</a>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
          <p>Galeri Sekolah</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @foreach ($photos as $photo)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <a href="{{asset("images/kegiatan/$photo->photo")}}" target="_blank">
                <img src='{{asset("images/kegiatan/$photo->photo")}}' class="img-fluid" alt="{{$photo->name}} loading=”lazy” ">
              </a>
              <div class="member-content">
                <h4>{{$photo->name}}</h4>
                <span>{{customTanggal($photo->created_at)}}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <br>
        <a href="{{route('all-photo')}}" class="mt-3">Lihat Semua Galeri</a>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

@endsection