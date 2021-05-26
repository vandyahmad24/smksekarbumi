<div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
        
          SMK Sekar Bumi Nusantara merupakan salah satu Lembaga Pendidikan Menengah Kejuruan di Kota Batang, Jawa Tengah Beralamatkan {{$alamat}}
        </div>
        <div class="col-lg-3">
          <h3 class="footer-heading"><span>Tentang Kami</span></h3>
          <ul class="list-unstyled">
            @foreach ($profil as $prof)
              <li><a href="{{route('page',$prof->slug)}}">{{$prof->title}}</a></li>
            @endforeach
          </ul>
        </div>
        <div class="col-lg-3">
            <h3 class="footer-heading"><span>Jurusan</span></h3>
            <ul class="list-unstyled">
              @foreach ($jurusan as $jus)
              <li><a href="{{route('jurusan-detail',$jus->slug)}}">{{$jus->name}}</a></li>
              @endforeach
            </ul>
        </div>
        <div class="col-lg-3">
            <h3 class="footer-heading"><span>Kontak</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Telepon : {{$telepon}}</a></li>
                <li><a href="#">Email {{$email}}</a></li>
            </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="copyright">
              <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> SMK Sekar Bumi Nusantara || by <a href="https://colorlib.com" target="_blank" >SMK Sekar Bumi Nusantara</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
          </div>
        </div>
      </div>
    </div>
  </div>

 </div>