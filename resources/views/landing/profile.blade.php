@extends("root.landing")
@section("title", "Profile")
@section("profile", "active")
@section("content")

<aside id="fh5co-hero">
  <div class="flexslider">
    <ul class="slides">
       <li style="background-image: url(landing/images/img_bg_4.jpg);">
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
    </div>
    <div class="col-md-6">
      <img class="img-responsive" src="landing/images/foto_gedung.jpg" alt="Free HTML5 Bootstrap Template">
    </div>
  </div>
</div>

<div id="fh5co-course" class="fh5co-bg-section">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h2>Struktur Organisasi</h2>
        <p>Struktur organisasi Sekolah Menengah Pertama Negeri 7 Bontang</p>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-12">
        <img src="landing/images/strukturorganisasi.jpg" width="100%" alt="Struktur Organisasi">
      </div>
    </div>
    {{-- <div class="row">
      <div class="col-md-6 animate-box">
        <div class="course">
          <a href="#" class="course-img" style="background-image: url(landing/images/project-1.jpg);">
          </a>
          <div class="desc">
            <h3><a href="#">Web Master</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
          </div>
        </div>
      </div>
      <div class="col-md-6 animate-box">
        <div class="course">
          <a href="#" class="course-img" style="background-image: url(landing/images/project-2.jpg);">
          </a>
          <div class="desc">
            <h3><a href="#">Business &amp; Accounting</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
          </div>
        </div>
      </div>
      <div class="col-md-6 animate-box">
        <div class="course">
          <a href="#" class="course-img" style="background-image: url(landing/images/project-3.jpg);">
          </a>
          <div class="desc">
            <h3><a href="#">Science &amp; Technology</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
          </div>
        </div>
      </div>
      <div class="col-md-6 animate-box">
        <div class="course">
          <a href="#" class="course-img" style="background-image: url(landing/images/project-4.jpg);">
          </a>
          <div class="desc">
            <h3><a href="#">Health &amp; Psychology</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
          </div>
        </div>
      </div>
      <div class="col-md-6 animate-box">
        <div class="course">
          <a href="#" class="course-img" style="background-image: url(landing/images/project-5.jpg);">
          </a>
          <div class="desc">
            <h3><a href="#">Science &amp; Technology</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
          </div>
        </div>
      </div>
      <div class="col-md-6 animate-box">
        <div class="course">
          <a href="#" class="course-img" style="background-image: url(landing/images/project-6.jpg);">
          </a>
          <div class="desc">
            <h3><a href="#">Health &amp; Psychology</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
</div>

{{-- <div id="fh5co-register" style="background-image: url(landing/images/img_bg_2.jpg);">
  <div class="overlay"></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2 animate-box">
      <div class="date-counter text-center">
        <h2>Get 400 of Online Courses for Free</h2>
        <h3>By Mike Smith</h3>
        <div class="simply-countdown simply-countdown-one"></div>
        <p><strong>Limited Offer, Hurry Up!</strong></p>
        <p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
      </div>
    </div>
  </div>
</div> --}}

@endsection