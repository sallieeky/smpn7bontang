@extends("root.landing")
@section("title", "Contact")
@section("contact", "active")
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
                 <h1 class="heading-section">Kontak SMP Negeri 7 Bontang</h1>
                {{-- <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> --}}
               </div>
             </div>
           </div>
         </div>
       </li>
      </ul>
    </div>
</aside>

<div id="fh5co-contact">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-push-1 animate-box">
        
        <div class="fh5co-contact-info">
          <h3>Informasi Kontak</h3>
          <ul>
            <li class="address">Jl. K.S Tubun Tanjung Laut Indah <br> Bontang Sel., Kota Bontang, Kalimantan Timur 75325</li>
            <li class="phone"><a href="tel://05483036153">(0548) 303-6153</a></li>
            <li class="email"><a href="mailto:smpneg7bontang@gmail.com">smpneg7bontang@gmail.com</a></li>
          </ul>
        </div>

      </div>
      <div class="col-md-6 animate-box">
        <h3>Hubungi Kami</h3>
        <form action="/kirim-pesan" method="POST">
          @csrf
          <div class="row form-group">
            <div class="col-md-6">
              <input type="text" id="fname" class="form-control" name="nama_depan" placeholder="Nama depan">
            </div>
            <div class="col-md-6">
              <input type="text" id="lname" class="form-control" name="nama_belakang" placeholder="Nama belakang">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <input type="text" id="email" class="form-control" name="email" placeholder="Alamat Email">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <input type="text" id="subject" class="form-control" name="subjek" placeholder="Subjek pesan">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <textarea id="message" cols="30" rows="10" name="pesan" class="form-control" placeholder="Isi pesan"></textarea>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Kirim pesan</button>
          </div>
        </form>		
      </div>
    </div>
    
  </div>
</div>


@if(session('pesan'))
{!! session('pesan') !!}
@endif


@endsection
@section("js")
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="landing/js/google_map.js"></script>
@endsection