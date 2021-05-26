  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6 footer-contact">
            <h3>Profil Sekolah</h3>
            <p>
                SMK Sekar Bumi Nusantara merupakan salah satu Lembaga Pendidikan Menengah Kejuruan di Kota Batang, Jawa Tengah Beralamatkan <br>{{$alamat}} <br>
              <strong>Telepon:</strong> {{$telepon}}<br>
              <strong>Email:</strong> {{$email}}<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Tentang Sekolah</h4>
            <ul>
                @foreach ($profil as $prof)
                <li><a href="{{route('page',$prof->slug)}}">{{$prof->title}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Profil Jurusan</h4>
            <ul>
                @foreach ($jurusan as $jus)
                <li><a href="{{route('jurusan-detail',$jus->slug)}}">{{$jus->name}}</a></li>
                @endforeach
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>SMK</span></strong>. Sekar Bumi Nusantara
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>
