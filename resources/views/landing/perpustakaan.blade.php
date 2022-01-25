@extends("root.landing")
@section("title", "Perpustakaan")
@section("perpustakaan", "active")
@section("content")


<aside id="fh5co-hero">
  <div class="flexslider">
    <ul class="slides">
       <li style="background-image: url(landing/images/perpus_hero.jpg);">
         <div class="overlay-gradient"></div>
         <div class="container">
           <div class="row">
             <div class="col-md-8 col-md-offset-2 text-center slider-text">
               <div class="slider-text-inner">
                 <h1 class="heading-section">Perpustakaan SMPN 7 Bontang</h1>
                {{-- <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> --}}
               </div>
             </div>
           </div>
         </div>
       </li>
      </ul>
    </div>
</aside>

<div id="fh5co-course">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h2>Profile Perpustakaan SMPN 7 Bontang</h2>
        <p>Data grafis</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-3">
        <h5>Nama</h5>
        <p>Perpustakaan SMP Negeri 7 Bontang</p>
        <h5>Alamat</h5>
        <p>Jl KS Tubun RT 29 Tanjung laut Indah</p>
        <h5>Nama Kepala Instansi</h5>
        <p>Muhiddin.P, S.Pd</p>
        <h5>Nama Kepala perpustakaan</h5>
        <p>Susilo Wahyu Widyastuti, S.Pd</p>
        <h5>Nama petugas pengolahan</h5>
        <p>Minarsih, S.Pd</p>
        <h5>Jumlah anggota perpustakaan</h5>
        <p>307 (siwa dan 25 (guru dan Staff)</p>
      </div>

      <div class="col-md-4">
        <h5>Prasarana fisik</h5>
        <ol>
          <li>Tanah (63 m2 )</li>
          <li>Bangunan (63 m2 )</li>
          <li>Ruang (63 m2 )</li>
        </ol>

        <h5>Sarana</h5>
        <ol>
          <li>Rak</li>
          <li>Lemari</li>
          <li>Kursi</li>
          <li>Meja</li>
          <li>Loker Tas</li>
          <li>Loker Katalog</li>
          <li>Loker Meja Peminjaman</li>
          <li>Mesin Ketik</li>
          <li>Komputer</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div id="fh5co-course" class="fh5co-bg-section">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h2>Struktur Organisasi Perpustakaan SMP Negeri 7 Bontang</h2>
        <p>Struktur organisasi perpustakaan Sekolah Menengah Pertama Negeri 7 Bontang</p>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-12 text-center">
        <img src="landing/images/struktur_perpus.png" width="720" alt="Struktur Organisasi">
      </div>
    </div>
  </div>
</div>

{{-- VISI MISI SECTION --}}
<div>
  <div class="container" style="padding: 50px 0">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center">Visi dan Misi Perpustakaan SMP NEGERI 7 BONTANG</h3>

        <p>
          <strong>VISI</strong>
          <br>
          <br>
          <span style="font-size: 1.2em;">
            <i class="icon-quote-left"></i>
            <strong>“</strong>
            Pemberdayaan potensi perpustakaan dalam  meningkatkan mutu pendidikan di sekolah
            <strong>”</strong>
          </span>
        </p>

        <p>
          <strong>MISI</strong>
          <br>
          <br>
          <span style="font-size: 1.2em; text-align: center">
            <i class="icon-quote-left"></i>
            1. Melestarikan bahan pustaka (termasuk karya siswa dan guru). <br>
            2. Menyelenggarakan pelayanan perpustakaan secara prima. <br>
            3. Menumbuhkan minat baca,mengembangakan ide dan kreatifitas. <br>
            4. Mendidik siswa agar memelihara dan memanfaatkan bahan bacaan secara tepat guna. <br>
            5. Meningkatkan kualitas dan kuantitas koleksi buku bacaan dan referensi. <br>
            6. Meningkatak frekeunsi kunjungan ke perpustakaan sekolah melalui berbagai cara. <br>
          </span>
        </p>
      </div>
    </div>
  </div>
</div>
{{-- END VISI MISI SECTION --}}

{{-- <div id="fh5co-about">
  <div class="container">
    <div class="col-md-6 animate-box">
      <span>Tentang Perpustakaan</span>
      <h2>Perpustakaan SMPN 7 Bontang</h2>
      <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.</p>
      <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed.</p>
      <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.</p>
    </div>
    <div class="col-md-6">
      <img class="img-responsive" src="landing/images/img_bg_2.jpg" alt="Free HTML5 Bootstrap Template">
    </div>
  </div>
</div> --}}

{{-- <div id="fh5co-counter" class="fh5co-counters" style="background-image: url(landing/images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="row">
          <div class="col-md-3 col-sm-6 text-center animate-box">
            <span class="icon"><i class="icon-world"></i></span>
            <span class="fh5co-counter js-counter" data-from="0" data-to="3297" data-speed="5000" data-refresh-interval="50"></span>
            <span class="fh5co-counter-label">Foreign Followers</span>
          </div>
          <div class="col-md-3 col-sm-6 text-center animate-box">
            <span class="icon"><i class="icon-study"></i></span>
            <span class="fh5co-counter js-counter" data-from="0" data-to="3700" data-speed="5000" data-refresh-interval="50"></span>
            <span class="fh5co-counter-label">Students Enrolled</span>
          </div>
          <div class="col-md-3 col-sm-6 text-center animate-box">
            <span class="icon"><i class="icon-bulb"></i></span>
            <span class="fh5co-counter js-counter" data-from="0" data-to="5034" data-speed="5000" data-refresh-interval="50"></span>
            <span class="fh5co-counter-label">Classes Complete</span>
          </div>
          <div class="col-md-3 col-sm-6 text-center animate-box">
            <span class="icon"><i class="icon-head"></i></span>
            <span class="fh5co-counter js-counter" data-from="0" data-to="1080" data-speed="5000" data-refresh-interval="50"></span>
            <span class="fh5co-counter-label">Certified Teachers</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}

{{-- <div id="fh5co-course-categories">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h2>Course categories</h2>
        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 text-center animate-box">
        <div class="services">
          <span class="icon">
            <i class="icon-shop"></i>
          </span>
          <div class="desc">
            <h3><a href="#">Business</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 text-center animate-box">
        <div class="services">
          <span class="icon">
            <i class="icon-heart4"></i>
          </span>
          <div class="desc">
            <h3><a href="#">Health &amp; Psychology</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 text-center animate-box">
        <div class="services">
          <span class="icon">
            <i class="icon-banknote"></i>
          </span>
          <div class="desc">
            <h3><a href="#">Accounting</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 text-center animate-box">
        <div class="services">
          <span class="icon">
            <i class="icon-lab2"></i>
          </span>
          <div class="desc">
            <h3><a href="#">Science &amp; Technology</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 text-center animate-box">
        <div class="services">
          <span class="icon">
            <i class="icon-photo"></i>
          </span>
          <div class="desc">
            <h3><a href="#">Art &amp; Media</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 text-center animate-box">
        <div class="services">
          <span class="icon">
            <i class="icon-home-outline"></i>
          </span>
          <div class="desc">
            <h3><a href="#">Real Estate</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 text-center animate-box">
        <div class="services">
          <span class="icon">
            <i class="icon-bubble3"></i>
          </span>
          <div class="desc">
            <h3><a href="#">Language</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 text-center animate-box">
        <div class="services">
          <span class="icon">
            <i class="icon-world"></i>
          </span>
          <div class="desc">
            <h3><a href="#">Web &amp; Programming</a></h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}

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

{{-- <div id="fh5co-gallery" class="fh5co-bg-section">
  <div class="row text-center">
    <h2><span>Instagram Gallery</span></h2>
  </div>
  <div class="row">
    <div class="col-md-3 col-padded">
      <a href="#" class="gallery" style="background-image: url(landing/images/project-5.jpg);"></a>
    </div>
    <div class="col-md-3 col-padded">
      <a href="#" class="gallery" style="background-image: url(landing/images/project-2.jpg);"></a>
    </div>
    <div class="col-md-3 col-padded">
      <a href="#" class="gallery" style="background-image: url(landing/images/project-3.jpg);"></a>
    </div>
    <div class="col-md-3 col-padded">
      <a href="#" class="gallery" style="background-image: url(landing/images/project-4.jpg);"></a>
    </div>
  </div>
</div> --}}

@endsection
