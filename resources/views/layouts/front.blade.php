<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="smk sekar bumi nusantara" name="description">
  <meta content="smk sekar bumi nusantara" name="keywords">

  <!-- Favicons -->
    @include('include.front.css')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto"><a href="index.html">Mentor</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{url('/')}}" class="logo mr-auto"><img src="{{asset('front/img/logo.png')}}" alt="" class="img-fluid"></a>

      @include('include.front.navbar')

      {{-- <a href="courses.html" class="get-started-btn">Get Started</a> --}}

    </div>
  </header><!-- End Header -->

  @yield('content')
  @include('include.front.footer')
  <!-- Vendor JS Files -->
 @include('include.front.js')

</body>

</html>