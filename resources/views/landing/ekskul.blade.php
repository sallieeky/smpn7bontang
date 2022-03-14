@extends("root.landing")
@section("title", "Ekskul")
@section("ekskul", 'active')
@section("content")

<aside id="fh5co-hero">
  <div class="flexslider">
    <ul class="slides">
       <li style="background-image: url(landing/images/ekskul1.JPG); background-position: center">
         <div class="overlay-gradient"></div>
         <div class="container">
           <div class="row">
             <div class="col-md-8 col-md-offset-2 text-center slider-text">
               <div class="slider-text-inner">
                 <h1 class="heading-section">Ekskul SMP Negeri 7 Bontang</h1>
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
      <h1>List Ekskul SMP Negeri 7 Bontang</h1>
      <hr>
      {{-- card --}}
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="col-md-4">
                <img src="landing/images/logo_pramuka.png" class="img-responsive" style="max-height: 200px" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <h5 class="card-title">Ekskul Pramuka</h5>
                <p class="card-text">Ekskul Pramuka adalah ekskul yang bergerak dalam bidang olahraga yang mengajar tentang kemampuan diri, keterampilan, dan kemampuan bertindak serta kemampuan berkomunikasi.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="col-md-4">
                <img src="landing/images/logo_multimedia.png" style="max-height: 200px" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <h5 class="card-title">Ekskul Multimedia</h5>
                <p class="card-text">Ekskul Multimedia adalah ekskul yang bergerak dalam bidang multimedia yang mempelajari tentang bagaimana memenfaatkan teknologi media digital dalam proses belajar mengajar dan juga meningkatkan kreatifitas dalam media digital</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="col-md-4">
                <img src="landing/images/logo_volley.png" style="max-height: 200px" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <h5 class="card-title">Ekskul Voli</h5>
                <p class="card-text">Ekstrakurikuler bola voli merupakan media untuk mendorong prestasi non akademik, pertumbuhan fisik dan perkembangan psikis, meningkatkan kemampuan dan keterampilan dalam bermain bola voli supaya lebih baik, serta pembiasaan pola hidup sehat dengan berolahraga.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="col-md-4">
                <img src="landing/images/logo_futsal.png" style="max-height: 200px" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <h5 class="card-title">Ekskul Futsal</h5>
                <p class="card-text">Ekstrakurikuler futsal diadakan dengan tujuan menyediakan wadah untuk siswa menyalurkan hobinya dan menghadirkan corak positif kepada para siswa yaitu sifat-sifat sportifitas serta mencetak bibit-bibit baru olahragawan yang berprestasi di tingkat lokal, nasional maupun internasional.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="col-md-4">
                <img src="landing/images/logo_tari.png" style="max-height: 200px" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-md-8">
                <h5 class="card-title">Ekskul Tari</h5>
                <p class="card-text">Ekskul seni tari adalah wadah bagi siswi yang memiliki kemampuan dalam menari. Sehingga mereka bisa mengembangkan dan mengekspresikan diri mereka melalui seni tari.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>


    </div>
  </div>
</div>


{{-- <div id="fh5co-pricing" class="fh5co-bg-section">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h2>Plan &amp; Pricing</h2>
        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
      </div>
    </div>
    <div class="row">
      <div class="pricing pricing--rabten">
        <div class="col-md-4 animate-box">
          <div class="pricing__item">
            <div class="wrap-price">
               <!-- <div class="icon icon-user2"></div> -->
                     <h3 class="pricing__title">Trial</h3>
                     <!-- <p class="pricing__sentence">Single user license</p> -->
            </div>
                   <div class="pricing__price">
                      <span class="pricing__anim pricing__anim--1">
              <span class="pricing__currency">$</span>0
                      </span>
                      <span class="pricing__anim pricing__anim--2">
              <span class="pricing__period">per year</span>
                      </span>
                   </div>
                   <div class="wrap-price">
                     <ul class="pricing__feature-list">
                        <li class="pricing__feature">One Day Trial</li>
                        <li class="pricing__feature">Limited Courses</li>
                        <li class="pricing__feature">Free 3 Lessons</li>
                        <li class="pricing__feature">No Supporter</li>
                        <li class="pricing__feature">No Tutorial</li>
                        <li class="pricing__feature">No Ebook</li>
                         <li class="pricing__feature">Limited Registered User</li>
                     </ul>
                     <button class="pricing__action">Choose plan</button>
                   </div>
                </div>
        </div>
        <div class="col-md-4 animate-box">
          <div class="pricing__item">
            <div class="wrap-price">
              <!-- <div class="icon icon-store"></div> -->
                     <h3 class="pricing__title">Silver</h3>
                     <!-- <p class="pricing__sentence">Up to 5 users</p> -->
            </div>
                   <div class="pricing__price">
                      <span class="pricing__anim pricing__anim--1">
              <span class="pricing__currency">$</span>79
                      </span>
                      <span class="pricing__anim pricing__anim--2">
              <span class="pricing__period">per year</span>
                      </span>
                   </div>
                   <div class="wrap-price">
                     <ul class="pricing__feature-list">
                        <li class="pricing__feature">One Year Standard Access</li>
                        <li class="pricing__feature">Limited Courses</li>
                        <li class="pricing__feature">300+ Lessons</li>
                        <li class="pricing__feature">Random Supporter</li>
                        <li class="pricing__feature">View Only Ebook</li>
                        <li class="pricing__feature">Standard Tutorials</li>
                         <li class="pricing__feature">Unlimited Registered User</li>
                     </ul>
                     <button class="pricing__action">Choose plan</button>
                   </div>
               </div>
        </div>
        <div class="col-md-4 animate-box">
                <div class="pricing__item">
                  <div class="wrap-price">
                    <!-- <div class="icon icon-home2"></div> -->
                     <h3 class="pricing__title">Gold</h3>
                     <!-- <p class="pricing__sentence">Unlimited users</p> -->
            </div>
                   <div class="pricing__price">
                      <span class="pricing__anim pricing__anim--1">
              <span class="pricing__currency">$</span>499
                      </span>
                      <span class="pricing__anim pricing__anim--2">
              <span class="pricing__period">per year</span>
                      </span>
                   </div>
                   <div class="wrap-price">
                     <ul class="pricing__feature-list">
                        <li class="pricing__feature">Life Time Access</li>
                        <li class="pricing__feature">Unlimited All Courses</li>
                        <li class="pricing__feature">7000+ Lessons &amp; Growing</li>
                        <li class="pricing__feature">Free Supporter</li>
                        <li class="pricing__feature">Free Ebook Downloads</li>
                        <li class="pricing__feature">Premium Tutorials</li>
                         <li class="pricing__feature">Unlimited Registered User</li>
                     </ul>
                     <button class="pricing__action">Choose plan</button>
                   </div>
                </div>
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