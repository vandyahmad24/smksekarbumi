<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  <div class="py-2 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-9 d-none d-lg-block">
          <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> {{$telepon}}</a> 
          <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> {{$email}} </a>
          <a href="#" class="small mr-3"><span class="icon-home mr-1"></span> {{$alamat}}   </a> 
        </div>
      </div>
    </div>
  </div>
  <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="d-flex align-items-center">
        <div class="site-logo">
          <a href="{{url('/')}}" class="d-block">
            <img src="{{asset('images/logotulisan.png')}}" alt="SMK Sekar bumi nusantara" class="img-fluid" width="250px">
          </a>
        </div>
        <div class="mr-auto">
          <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                <a href="{{route('root')}}" class="nav-link text-left">Beranda</a>
              </li>
              <li class="has-children">
                <a href="#" class="nav-link text-left">Profil</a>
                <ul class="dropdown">
                  @foreach ($profil as $prof)
                    <li><a href="{{route('page',$prof->slug)}}">{{$prof->title}}</a></li>
                  @endforeach
              
                </ul>
              </li>
              <li class="has-children">
                <a href="#" class="nav-link text-left">Program Keahlian</a>
                <ul class="dropdown">
                  @foreach ($jurusan as $jus)
                  <li><a href="{{route('jurusan-detail',$jus->slug)}}">{{$jus->name}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li class="{{ (request()->is('all-article')) ? 'active' : '' }} {{ (request()->is('article/*')) ? 'active' : '' }} ">
                <a href="{{route('all-article')}}" class="nav-link text-left">Berita</a>
              </li>
              <li>
                <a href="{{route('all-photo')}}" class="nav-link text-left">Galeri</a>
              </li>
              <li>
                <a href="{{route('kelulusan')}}" class="nav-link text-left">Kelulusan</a>
              </li>
              @auth
              <li>
                <a href="{{route('home')}}" class="nav-link text-left">Admin</a>
              </li>
              @endauth
             
            <ul>                                                                                                                                                                                                                                                                                          </ul>
          </nav>

        </div>
        <div class="ml-auto">
          <div class="social-wrap">
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black active"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
    </div>

  </header>