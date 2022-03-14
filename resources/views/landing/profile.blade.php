@extends("root.landing")
@section("title", "Profil")
@section("profile", "active")
@section("content")

<aside id="fh5co-hero">
  <div class="flexslider">
    <ul class="slides">
       <li style="background-image: url(landing/images/sekolah4.jpeg); background-position: center">
         <div class="overlay-gradient"></div>
         <div class="container">
           <div class="row">
             <div class="col-md-8 col-md-offset-2 text-center slider-text">
               <div class="slider-text-inner">
                 <h1 class="heading-section">Profil SMP Negeri 7 Bontang</h1>
               </div>
             </div>
           </div>
         </div>
       </li>
      </ul>
    </div>
</aside>

<div id="fh5co-about">
  <div class="container">
    <div class="col-md-6 animate-box">
      <span>Tentang SMPN 7 Bontang</span>
      <h2>Tentang SMPN 7 Bontang</h2>
      <p class="text-justify">
        Sekolah Menengah Pertama Negeri 7 Kota Bontang merupakan salah satu 
        institusi pendidikan negeri tingkat menengah pertama yang sudah berdiri sejak 
        16 Juli 2007. Sekolah Menengah Pertama Negeri 7 Kota Bontang berlokasi di
        Jl. K.S. Tubun No.29 Kecamatan Bontang Selatan, Kota Bontang yang telah 
        terakreditasi A. Sekolah Menengah Pertama Negeri 7 Kota Bontang memiliki 
        staf pengajar guru yang kompeten pada bidang pelajarannya sehingga 
        berkualitas dan menjadi salah satu yang terbaik di Kota Bontang. Tersedia juga 
        berbagai fasilitas sekolah seperti ruang kelas yang nyaman, perpustakaan, 
        lapangan olahraga, kantin dan lainnya. Adapun pelajaran yang diberikan 
        meliputi semua mata pelajaran wajib sesuai kurikulum yang berlaku.
      </p>
      {{-- alamat dan lain-lain --}}
      <ul class="info">
        <li><span class="first-block">Alamat:</span> Jl. K.S. Tubun No.29 Kecamatan Bontang Selatan, Kota Bontang</li>
        <li><span class="first-block">Telepon:</span> (0548) 303-6153</li>
        <li><span class="first-block">Email:</span>
          <a href="mailto:smpneg7bontang@gmail.com">smpneg7bontang@gmail.com</a>
        </li>
      </ul>

    </div>
    <div class="col-md-6">
      <img class="img-responsive" src="landing/images/foto_gedung.jpg" alt="Free HTML5 Bootstrap Template">
    </div>
  </div>
</div>

<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(/landing/images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="row">
          <div class="col-md-4 col-sm-6 text-center animate-box">
            <span class="icon"><i class="icon-world"></i></span>
            <span class="fh5co-counter js-counter" data-from="0" data-to="{{ $total }}" data-speed="5000" data-refresh-interval="50"></span>
            <span class="fh5co-counter-label">Total Pegawai</span>
          </div>
          <div class="col-md-4 col-sm-6 text-center animate-box">
            <span class="icon"><i class="icon-study"></i></span>
            <span class="fh5co-counter js-counter" data-from="0" data-to="{{ $guru }}" data-speed="5000" data-refresh-interval="50"></span>
            <span class="fh5co-counter-label">Total Guru</span>
          </div>
          <div class="col-md-4 col-sm-6 text-center animate-box">
            <span class="icon"><i class="icon-user"></i></span>
            <span class="fh5co-counter js-counter" data-from="0" data-to="{{ $tendik }}" data-speed="5000" data-refresh-interval="50"></span>
            <span class="fh5co-counter-label">Total Tenaga Kependidikan</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="fh5co-course">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h2>Struktur Organisasi</h2>
        <p>Struktur organisasi Sekolah Menengah Pertama Negeri 7 Bontang</p>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-12">
        <img src="landing/images/{{ $so->gambar }}" width="100%" alt="Struktur Organisasi">
      </div>
    </div>
  </div>
</div>



@endsection