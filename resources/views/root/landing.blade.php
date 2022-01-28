<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield("title") &mdash; Sekolah Menengeh Pertama Negeri 7 Bontang</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/landing/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/landing/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/landing/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/landing/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="/landing/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/landing/css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="/landing/css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="/landing/css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/landing/css/style.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/logo.png">

	{{-- Font Awesome 5 --}}
	<link href="/fa/css/all.css" rel="stylesheet"> 
	<!--load all styles -->

	{{-- Style Datatables --}}
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

	
  @yield("css")

	<!-- Modernizr JS -->
	<script src="/landing/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site"><a href="https://www.smpn7bontang.sch.id/">smpn7bontang.sch.id</a></p>
						<p class="num"><a href="tel:+6281243942304">Call: +628 124 394 2304</a></p>
						<ul class="fh5co-social">
							<li><a href="https://www.facebook.com/fanepagespenthu" target="_blank"><i class="icon-facebook2"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCST574sp8ZziESzSmfCWi5g" target="_blank"><i class="icon-youtube"></i></a></li>
							<li><a href="https://www.instagram.com/smpn7_bontang/" target="_blank"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<div id="fh5co-logo"><a href="/">
							<img src="/logo.png" style="height: 36px" alt="Logo SMPN 7 Bontang">
						</a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li class="@yield("home")"><a href="/">Home</a></li>
							<li class="@yield("profile")"><a href="/profile">Profile</a></li>
							<li class="@yield("pegawai")"><a href="/pegawai">Pegawai</a></li>
							<li class="@yield("perpustakaan")"><a href="/perpustakaan">Perpustakaan</a></li>
							<li class="@yield("ekskul")"><a href="/ekskul">Ekskul</a></li>
							<li class="has-dropdown @yield('informasi')">
								<a href="/informasi">Informasi</a>
								<ul class="dropdown">
									<li><a href="#">Karya Siswa</a></li>
								</ul>
							</li>
							<li class="@yield("contact")"><a href="/contact">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

  @yield("content")

	

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8088597227284!2d117.49337841426401!3d0.12477309990896805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320a0d833ed3ec7d%3A0x690661a1d445ca31!2sSMP%20Negeri%207%20Bontang!5e0!3m2!1sen!2sid!4v1643332113838!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <footer id="fh5co-footer" role="contentinfo" style="background-image: url(landing/images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About Education</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learning</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learn &amp; Grow</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Engage us</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Legal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

  @yield("js")
	
	<!-- jQuery -->
	<script src="/landing/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/landing/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/landing/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/landing/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="/landing/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="/landing/js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="/landing/js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="/landing/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="/landing/js/jquery.magnific-popup.min.js"></script>
	<script src="/landing/js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="/landing/js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="/landing/js/main.js"></script>
	
	
	{{-- CDN DataTables --}}
	<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
					// Datatables Responsive
					$("#datatables-reponsive").DataTable({
						responsive: true
					});
					$("#datatables-reponsive2").DataTable({
						responsive: true
					});
		});
	</script>

	
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>