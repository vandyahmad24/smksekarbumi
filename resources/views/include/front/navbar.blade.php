<nav class="nav-menu d-none d-lg-block">
    <ul>
      <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
      <li class="drop-down {{ (request()->is('/page/*')) ? 'active' : '' }}"><a href="">Profil</a>
        <ul>
          @foreach ($profil as $prof)
            <li><a href="{{route('page',$prof->slug)}}">{{$prof->title}}</a></li>
          @endforeach
        </ul>
      </li>
      <li class="drop-down {{ (request()->is('/jurusan/*')) ? 'active' : '' }}"><a href="">Program Keahlian</a>
        <ul>
          @foreach ($jurusan as $jus)
              <li><a href="{{route('jurusan-detail',$jus->slug)}}">{{$jus->name}}</a></li>
          @endforeach
        </ul>
      </li>
      <li class="{{ (request()->is('all-article')) ? 'active' : '' }} {{ (request()->is('article/*')) ? 'active' : '' }}"><a href="{{route('all-article')}}">Berita</a></li>
      <li class="{{ (request()->is('all-photo')) ? 'active' : '' }}"><a href="{{route('all-photo')}}">Galeri</a></li>
      <li class="{{ (request()->is('kelulusan')) ? 'active' : '' }}"><a href="{{route('kelulusan')}}">Kelulusan</a></li>
      @auth
      <li>
        <a href="{{route('home')}}">Admin</a>
      </li>
      @endauth

    </ul>
  </nav><!-- .nav-menu -->