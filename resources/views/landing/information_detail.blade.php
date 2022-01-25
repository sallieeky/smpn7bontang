@extends("root.landing")
@section("title", "Information Detail")
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
                 <h1 class="heading-section">Information</h1>
                {{-- <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> --}}
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
      <h1>Healty Lifestyle & Living</h1>
      <img class="img-fluid" height="300" src="landing/images/project-1.jpg" alt="Foto">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque recusandae inventore similique ducimus amet qui. Sunt quia iure corrupti officiis deserunt quae ab molestias ex suscipit temporibus, odio, impedit dolorum unde quisquam? Dolorem deserunt qui obcaecati fugit suscipit autem incidunt neque adipisci ab. Dignissimos repellat cumque asperiores, accusantium hic dolorem.</p>
    </div>

    <div class="col-md-4">
      <div class="row fh5co-bg-section" style="padding: 12px; margin: 16px 0">
        <div class="col-md-12">
          <h3 class="text-bold">KONTAK</h3>
          <ul class="list-unstyled">
            <li style="color: black">
              <span style="font-size: 1.2em"><i class="icon-location"></i><strong>Alamat : </strong></span><br>
              JL. K.S TUBUN Tanjung Laut Indah
            </li>
            <li style="color: black; margin-top: 16px">
              <span style="font-size: 1.2em"><i class="icon-phone"></i><strong>Telepon : </strong></span><br>
              0548-3034394
            </li>
            <li style="color: black; margin-top: 16px">
              <span style="font-size: 1.2em"><i class="icon-mail"></i><strong>Email : </strong></span><br>
              <a href="mailto:smpneg7bontang@gmail.com">smpneg7bontang@gmail.com</a>
          </ul>
        </div>
      </div>
      <div class="row fh5co-bg-section" style="padding: 12px; margin: 16px 0">
        <div class="col-md-12">
          <h3 class="text-bold">Kontak</h3>
          <ul class="list-unstyled">
            <li><a href="#">Pengumuman 1</a></li>
            <li><a href="#">Pengumuman 2</a></li>
            <li><a href="#">Pengumuman 3</a></li>
            <li><a href="#">Pengumuman 4</a></li>
            <li><a href="#">Pengumuman 5</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection