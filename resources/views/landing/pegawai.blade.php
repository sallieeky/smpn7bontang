@extends("root.landing")
@section("title", "Pegawai")
@section("pegawai", "active")
@section("content")

<aside id="fh5co-hero">
  <div class="flexslider">
    <ul class="slides">
       <li style="background-image: url(landing/images/guru1.JPG);">
         <div class="overlay-gradient"></div>
         <div class="container">
           <div class="row">
             <div class="col-md-8 col-md-offset-2 text-center slider-text">
               <div class="slider-text-inner">
                 <h1 class="heading-section">Pegawai SMP Negeri 7 Bontang</h1>
                {{-- <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> --}}
               </div>
             </div>
           </div>
         </div>
       </li>
      </ul>
    </div>
</aside>

<div id="fh5co-staff">
  <div class="container">
    <div class="row" style="margin-bottom: 64px">
      <h3>Daftar Guru SMP Negeri 7 Bontang</h3>
      <div class="col-md-12">
        <table id="datatables-reponsive2" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Bidang Kompetensi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($guru as $g)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $g->nama }}</td>
              <td>{{ $g->nip }}</td>
              <td>{{ $g->jabatan }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
    <div class="row">
      <h3>Daftar Tenaga Kependidikan SMP Negeri 7 Bontang</h3>
      <div class="col-md-12">
        <table id="datatables-reponsive" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Jabatan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tendik as $t)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $t->nama }}</td>
              <td>{{ $t->nip }}</td>
              <td>{{ $t->jabatan }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

{{-- <div id="fh5co-staff">
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-center">
        <div class="staff">
          <div class="staff-img" style="background-image: url(landing/images/staff-1.jpg);">
            <ul class="fh5co-social">
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-twitter2"></i></a></li>
              <li><a href="#"><i class="icon-dribbble2"></i></a></li>
              <li><a href="#"><i class="icon-github"></i></a></li>
            </ul>
          </div>
          <span>Health Teacher</span>
          <h3><a href="#">Mike Smith</a></h3>
          <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
        </div>
      </div>
      <div class="col-md-3 animate-box text-center">
        <div class="staff">
          <div class="staff-img" style="background-image: url(landing/images/staff-2.jpg);">
            <ul class="fh5co-social">
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-twitter2"></i></a></li>
              <li><a href="#"><i class="icon-dribbble2"></i></a></li>
              <li><a href="#"><i class="icon-github"></i></a></li>
            </ul>
          </div>
          <span>Health Teacher</span>
          <h3><a href="#">Mike Smith</a></h3>
          <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
        </div>
      </div>
      <div class="col-md-3 animate-box text-center">
        <div class="staff">
          <div class="staff-img" style="background-image: url(landing/images/staff-3.jpg);">
            <ul class="fh5co-social">
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-twitter2"></i></a></li>
              <li><a href="#"><i class="icon-dribbble2"></i></a></li>
              <li><a href="#"><i class="icon-github"></i></a></li>
            </ul>
          </div>
          <span>Health Teacher</span>
          <h3><a href="#">Mike Smith</a></h3>
          <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
        </div>
      </div>
      <div class="col-md-3 animate-box text-center">
        <div class="staff">
          <div class="staff-img" style="background-image: url(landing/images/staff-1.jpg);">
            <ul class="fh5co-social">
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-twitter2"></i></a></li>
              <li><a href="#"><i class="icon-dribbble2"></i></a></li>
              <li><a href="#"><i class="icon-github"></i></a></li>
            </ul>
          </div>
          <span>Health Teacher</span>
          <h3><a href="#">Mike Smith</a></h3>
          <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
        </div>
      </div>
      <div class="col-md-3 animate-box text-center">
        <div class="staff">
          <div class="staff-img" style="background-image: url(landing/images/staff-1.jpg);">
            <ul class="fh5co-social">
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-twitter2"></i></a></li>
              <li><a href="#"><i class="icon-dribbble2"></i></a></li>
              <li><a href="#"><i class="icon-github"></i></a></li>
            </ul>
          </div>
          <span>Health Teacher</span>
          <h3><a href="#">Mike Smith</a></h3>
          <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
        </div>
      </div>
      <div class="col-md-3 animate-box text-center">
        <div class="staff">
          <div class="staff-img" style="background-image: url(landing/images/staff-3.jpg);">
            <ul class="fh5co-social">
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-twitter2"></i></a></li>
              <li><a href="#"><i class="icon-dribbble2"></i></a></li>
              <li><a href="#"><i class="icon-github"></i></a></li>
            </ul>
          </div>
          <span>Health Teacher</span>
          <h3><a href="#">Mike Smith</a></h3>
          <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
        </div>
      </div>
      <div class="col-md-3 animate-box text-center">
        <div class="staff">
          <div class="staff-img" style="background-image: url(landing/images/staff-2.jpg);">
            <ul class="fh5co-social">
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-twitter2"></i></a></li>
              <li><a href="#"><i class="icon-dribbble2"></i></a></li>
              <li><a href="#"><i class="icon-github"></i></a></li>
            </ul>
          </div>
          <span>Health Teacher</span>
          <h3><a href="#">Mike Smith</a></h3>
          <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
        </div>
      </div>
      <div class="col-md-3 animate-box text-center">
        <div class="staff">
          <div class="staff-img" style="background-image: url(landing/images/staff-3.jpg);">
            <ul class="fh5co-social">
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-twitter2"></i></a></li>
              <li><a href="#"><i class="icon-dribbble2"></i></a></li>
              <li><a href="#"><i class="icon-github"></i></a></li>
            </ul>
          </div>
          <span>Health Teacher</span>
          <h3><a href="#">Mike Smith</a></h3>
          <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="fh5co-register" style="background-image: url(landing/images/img_bg_2.jpg);">
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