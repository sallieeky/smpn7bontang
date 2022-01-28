@extends("root.landing")
@section("title", "Informasi")
@section('informasi', 'active')
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
                 <h1 class="heading-section">Informasi SMP Negeri 7 Bontang</h1>
               </div>
             </div>
           </div>
         </div>
       </li>
      </ul>
    </div>
</aside>

<div id="fh5co-blog">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
        <h2>Semua Informasi</h2>
        {{-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> --}}
      </div>
    </div>
    <div class="row">
      @if(count($informasi) < 1)
					<div class="col-md-12 text-center">
						<h3>Tidak ada informasi</h3>
					</div>
				@endif
				@foreach ($informasi as $i)
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a class="blog-img-holder img-thumbnail" style="background-image: url(/upload/informasi/{{ $i->gambar }}); object-fit: contain;"></a>
						<div class="blog-text">
							<h3><a href="/informasi/{{ $i->id }}">{{ $i->judul }}</a></h3>
							<span class="posted_on">{{ $i->created_at->format('M. d Y') }}</span>
							<p>{{ substr(str_replace('<br />', '', $i->isi), 0, 75) }} @if(strlen($i->isi) > 75) . . . @endif</p>
							<p></p>
						</div> 
					</div>
				</div>
				@endforeach
    </div>
  </div>
</div>


@endsection