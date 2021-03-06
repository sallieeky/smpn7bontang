@extends("root.landing")
@section("title", "Beranda")
@section("beranda", "active")
@section("content")
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(landing/images/sekolah2.jpeg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Selamat Datang Di Website SMPN 7 Bontang</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(landing/images/banner1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
									<h1>Selamat Datang Di Website SMPN 7 Bontang</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(landing/images/sekolah3.jpeg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
									<h1>Selamat Datang Di Website SMPN 7 Bontang</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>

	{{-- SAMBUTAN SECTION --}}
	<div class="container" style="margin-top: 50px">
		<div class="row">
			<div class="col-md-8">
				<h3 class="text-bold">SAMBUTAN KEPALA SEKOLAH</h3>
				<figure>
					<img src="landing/images/{{ $sambutan->gambar }}" alt="sambutan kepala sekolah" class="img-responsive">
					<figcaption><small>Kepala sekolah SMP Negeri 7 Bontang</small></figcaption>
				</figure>
				<p class="text-justify">
					{!! $sambutan->sambutan !!}
				</p>
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
								(0548) 303-6153
							</li>
							<li style="color: black; margin-top: 16px">
								<span style="font-size: 1.2em"><i class="icon-mail"></i><strong>Email : </strong></span><br>
								<a href="mailto:smpneg7bontang@gmail.com">smpneg7bontang@gmail.com</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- END SAMBUTAN SECTION --}}

	{{-- VISI MISI SECTION --}}
	<div class="fh5co-bg-section">
		<div class="container" style="padding: 50px 0">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center">VISI, MISI, dan TUJUAN SMP NEGERI 7 BONTANG</h3>

					<p>
						<strong>VISI</strong>
						<br>
						<br>
						<span style="font-size: 1.2em;">
							<i class="icon-quote-left"></i>
							<strong>???</strong>
							Unggul dalam Prestasi, Santun dalam Berperilaku, Berbudaya dan Berwawasan Lingkungan
							<strong>???</strong>
						</span>
					</p>

					<p>
						<strong>MISI</strong>
						<br>
						<br>
						<span style="font-size: 1.2em; text-align: center">
							<i class="icon-quote-left"></i>
							<strong>???</strong>
							Menciptakan lingkungan sekolah yang nyaman, aman, dan menyenangkan serta mengedepankan asas kekeluargaan untuk menjadikan warga sekolah yang Aktif, Kreatif, Bersih, Antusias dan Religius
							<strong>???</strong>
						</span>
					</p>

					<p>
						<strong>TUJUAN</strong>
						<br>
						<br>
						<span style="font-size: 1.2em">
								<i class="icon-quote-left"></i>
									1. Menciptakan lingkungan sekolah yang nyaman, aman, dan menyenangkan serta mengedepankan asas kekeluargaan untuk menjadikan warga sekolah yang Aktif, Kreatif, Bersih, Antusias dan Religius<br>
									2. Sekolah mampu memenuhi standar Isi.<br>
									3. Sekolah mampu memenuhi standar Proses.<br>
									4. Sekolah mampu memenuhi standar Penilaian.<br>
									5. Sekolah mampu memenuhi standar Pendidikan dan Kependidikan.<br>
									6. Sekolah mampu memenuhi standar Sarana dan Prasarana. <br>
									7. Sekolah mampu memenuhi standar Pengelolaan. <br>
									8. Sekolah mampu memenuhi standar Pembiayaan. <br>
									9. Sekolah mampu memenuhi standar Budaya Lingkungan Sekolah. <br>
						</span>
					</p>

				</div>
			</div>
		</div>
	</div>
	{{-- END VISI MISI SECTION --}}

	{{-- INFORMATION SECTION --}}
	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Informasi</h2>
					<p>Informasi terbaru yang diterbitkan oleh SMP Negeri 7 Bontang</p>
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
	{{-- END INFORMATION SECTION --}}

@endsection