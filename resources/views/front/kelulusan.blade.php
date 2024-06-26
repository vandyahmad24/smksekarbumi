
@extends('layouts.front')
@section('title','Halaman Kelulusan')
@section('content')    


<div class="site-section" style="margin-top: 150px">
    <div class="container">


        @if ($now > $conf_buka->tgl_buka)
        <form action="{{route('cek-nilai')}}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="nis">NIS</label>
                            <input type="number" id="nis" name="nis" class="form-control form-control-lg" placeholder="Masukan nis" value="{{old('nis')}}">
                            <small>Masukan NIS Anda</small>
                        </div>
                        @if (session('gagal'))
                            <div class="col-md-12 form-group">
                                <div class="alert alert-danger" role="alert">
                                    {!! session('gagal') !!}
                                </div>
                            </div>
                        @endif
                        @if (session('lulus'))
                            <div class="col-md-12 form-group">
                                <div class="alert alert-success" role="alert">
                                    {!! session('lulus') !!}
                                </div>
                            </div>
                        @endif
                        
                        @if ($errors->any())
                        <div class="col-md-12 form-group">
                            <div class="alert alert-warning" role="alert">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    @endif

                    </div>
                    <div class="row">
                        <div class="col-12">
                            {{-- <a href='//$link->isi' target='_blank'> --}}
                            @if (!session('lulus'))
                            <button type="submit" class="btn btn-primary btn-lg px-5">Lihat Nilai</button>
                            @else
                            <a href="//{{$config->isi}}" target='_blank' class="btn btn-success btn-lg px-5">Lihat SKL</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @else
        <div class="row justify-content-center">
            <center>
                <h3>
                   <b class=""> SELAMAT DATANG CALON ALUMNI SMK SEKAR BUMI NUSANTARA DI SITUS KELULUSAN</b>
                </h3>
            <div class="col-md-12">
                "Hallo,. Siswa - Siswi Kelas XII SMK Sekar Bumi Nusantara Gringsing"
                <br>
                Marilah kita iringi momentum kelulusan ini dengan kegiatan positif sebagai implementasi pelajar yang kreatif, inovatif dan berbudi luhur. 
                <br> NO CORET-CORET & NO KONVOI
            </div>
            <div class="example mt-3">
                <div class="container">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header">
                            <h3>Waktu Mundur Pengumuman Kelulusan</h3>
                        </div>
                        <div class="card-body">
                            <h1>
                                <div id="clock"></div>
                            </h1>
                            <input type="hidden" value="<?=$conf_buka->tgl_buka ?>" id="waktu">
                        </div>
                    </div>
                </div>


            </div>
            </center>
        </div>
        @endif
        

      
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var targetDate = new Date("{{$conf_buka->tgl_buka}}").getTime();

    var countdown = setInterval(function() {
        var now = new Date().getTime();
        var distance = targetDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("clock").innerHTML = '<span>' + days + '</span> Hari ' +
                                                      '<span>' + hours + '</span> Jam ' +
                                                      '<span>' + minutes + '</span> Menit ' +
                                                      '<span>' + seconds + '</span> Detik ';

        if (distance < 0) {
            clearInterval(countdown);
            document.getElementById("clock").innerHTML = "Waktu pengumuman telah berakhir";
        }
    }, 1000);
});

</script>
@endsection
