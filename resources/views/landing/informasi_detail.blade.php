@extends("root.landing")
@section("title", $informasi->judul)
@section('informasi', 'active')
@section("content")

<aside id="fh5co-hero">
  <div class="flexslider">
    <ul class="slides">
       <li style="background-image: url(/landing/images/img_bg_4.jpg);">
         <div class="overlay-gradient"></div>
         <div class="container">
           <div class="row">
             <div class="col-md-8 col-md-offset-2 text-center slider-text">
               <div class="slider-text-inner">
                 <h1 class="heading-section">{{$informasi->judul}}</h1>
                  <h2>Informasi SMPN 7 Bontang</h2>
               </div>
             </div>
           </div>
         </div>
       </li>
      </ul>
    </div>
</aside>

<div class="container" style="margin-top: 50px">
  <div class="row">
    <div class="col-md-8">
      <h1>{{ $informasi->judul }}</h1>
      <img class="img-fluid" style="margin-bottom: 32px" height="300" src="/upload/informasi/{{ $informasi->gambar }}" alt="Foto">
      <p>{!! $informasi->isi !!}</p>
    </div>

    <div class="col-md-4">
      <div class="row fh5co-bg-section" style="padding: 12px; margin: 16px 0">
        <div class="col-md-12">
          <h3 class="text-bold">Informasi Lainnya</h3>
          <ul class="list-unstyled">
            @foreach ($informasiRandom as $ir)
            <li>
              <label>{{ $ir->judul }}</label>
              <a href="#"><img class="img img-thumbnail" src="/upload/informasi/{{ $ir->gambar }}" width="100%" alt="{{ $ir->judul }}"></a>
            </li>
            <hr>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection