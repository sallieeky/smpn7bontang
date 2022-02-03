@extends("root.landing")
@section("title", "Karya")
{{-- @section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
@endsection --}}
@section("informasi", 'active')
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
                 <h1 class="heading-section">Karya SMP Negeri 7 Bontang</h1>
                {{-- <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> --}}
               </div>
             </div>
           </div>
         </div>
       </li>
      </ul>
    </div>
</aside>

<div class="container" style="margin-top: 50px; margin-bottom: 50px" >
  <div class="row">
    <div class="col-md-12">
      <h1>Daftar Karya Siswa/siswi SMP Negeri 7 Bontang</h1>
      <hr>
      
      <h3 class="text-center">Karya Gambar Siswa/siswi</h3>
      @if (count($karya_image) < 1)
      <div class="text-center bg-primary" style="padding: 5px; border-radius: 3px" role="alert">
        Belum ada karya gambar siswa/siswi
      </div>
      @endif
      <div class="row">
      @foreach ($karya_image as $ki)
        <div class="col-md-4">
          <div class="card" style="background-color: #fcfcfc; margin-bottom: 20px;">
            <div class="card-header" style="margin-bottom: 20px">
              <center>
                <button class="btn btn-link" style="width: 100%; padding:0" data-toggle="modal" data-target="#liatModal-{{ $ki->id }}">
                <img src="{{ asset('upload/karya/image/'.$ki->karya) }}" class="img-responsive" style="max-height: 200px; width: 100%; object-fit: cover">
                </button>
              </center>
            </div>
            <div class="card-body" style="padding: 16px">
              <h5 class="card-title">{{ $ki->judul }}</h5>
              <small>Pencipta - {{ $ki->pencipta }} ( {{ $ki->kelas }} )</small>
              <p class="card-text">{!! $ki->deskripsi !!}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <hr>

    <h3 class="text-center">Karya Video Siswa/siswi</h3>
    @if (count($karya_video) < 1)
    <div class="text-center bg-primary" style="padding: 5px; border-radius: 3px" role="alert">
      Belum ada karya video siswa/siswi
    </div>
    @endif
    <div class="row">
    @foreach ($karya_video as $kv)
    <div class="col-md-4">
      <div class="card" style="background-color: #fcfcfc; margin-bottom: 20px;">
        <div class="card-header" style="margin-bottom: 20px">
          <center>
            {{-- video player --}}
            <button class="btn btn-link" style="width: 100%; padding:0" data-toggle="modal" data-target="#liatModalKv-{{ $kv->id }}">
            <video width="100%" controls>
              <source src="{{ asset('upload/karya/video/'.$kv->karya) }}" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </button>
          </center>
        </div>
        <div class="card-body" style="padding: 16px">
          <h5 class="card-title">{{ $kv->judul }}</h5>
          <small>Pencipta - {{ $kv->pencipta }} ( {{ $kv->kelas }} )</small>
          <p class="card-text">{!! $kv->deskripsi !!}</p>
        </div>
      </div>
    </div>
    @endforeach
    </div>
    <hr>


  <h3 class="text-center">Karya Audio Siswa/siswi</h3>
  @if (count($karya_audio) < 1)
  <div class="text-center bg-primary" style="padding: 5px; border-radius: 3px" role="alert">
    Belum ada karya audio siswa/siswi
  </div>
  @endif
  <div class="row">
  @foreach ($karya_audio as $ka)
  <div class="col-md-4">
    <div class="card" style="background-color: #fcfcfc; margin-bottom: 20px;">
      <div class="card-body" style="padding: 16px">
        <h5 class="card-title">{{ $ka->judul }}</h5>
        <center>
          <audio controls>
            <source src="{{ asset('upload/karya/audio/'.$ka->karya) }}" type="audio/mpeg">
              Your browser does not support the audio tag.
            </audio>
        </center>
        <small>Pencipta - {{ $ka->pencipta }} ( {{ $ka->kelas }} )</small>
        <p class="card-text">{!! $ka->deskripsi !!}</p>
      </div>
    </div>
  </div>
    @endforeach
  </div>
  <hr>

@foreach ($karya_image as $ki)
<div class="modal fade" id="liatModal-{{ $ki->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $ki->judul }}</h5>
      </div>
      <div class="modal-body">
        <img src="{{asset('upload/karya/image/' . $ki->karya)}}" width="100%" alt="{{ $ki->judul }}">
        <small>Pencipta - {{ $ki->pencipta }} ( {{ $ki->kelas }} )</small>
        <p>{!! $ki->deskripsi !!}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
@endforeach

@foreach ($karya_video as $kv)
<div class="modal fade" id="liatModalKv-{{ $kv->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $kv->judul }}</h5>
      </div>
      <div class="modal-body">
        <video width="100%" controls>
          <source src="{{ asset('upload/karya/video/'.$kv->karya) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <small>Pencipta - {{ $kv->pencipta }} ( {{ $kv->kelas }} )</small>
        <p>{!! $kv->deskripsi !!}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
@endforeach
    </div>
  </div>
</div>

@endsection