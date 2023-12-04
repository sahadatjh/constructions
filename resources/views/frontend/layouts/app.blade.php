<!DOCTYPE html>
<html lang="en"> 
	
<head>
		<!-- meta tag -->
		<meta charset="utf-8">
		<title>Abashon Design </title>
		<meta name="description" content="">
		<!-- responsive tag -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->
		<link rel="apple-touch-icon" href="apple-touch-icon.html">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/images/logo/logo-small.png') }}">
		<!-- Bootstrap v4.4.1 css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
		<!-- font-awesome css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
		<!-- Uicons Regular Rounded css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/uicons-regular-rounded.css') }}">
		<!-- flaticon css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/flaticon.css') }}">
		<!-- animate css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/animate.css') }}">
		<!-- slick css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/slick.css') }}">
		<!-- owl.carousel css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
		<!-- off canvas css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/off-canvas.css') }}">
		<!-- magnific popup css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
		<!-- Main Menu css -->
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/rsmenu-main.css') }}">
		<!-- nivo slider CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/inc/custom-slider/css/nivo-slider.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/inc/custom-slider/css/preview.css') }}">
		<!-- spacing css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/rs-spacing.css') }}">
		<!-- style css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/style.css') }}"> <!-- This stylesheet dynamically changed from style.less -->
		<!-- responsive css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/responsive.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/custom.css') }}">
		
	</head>
	<body class="defult-home">
		
		<div class="offwrap"></div>

		<!--Preloader start here-->
	   	<div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="{{ asset('assets/frontend/images/logo/logo-full.png') }}" alt="Abason Design"></div>
                </div>
            </div>              
        </div>
		<!--Preloader area end here-->
			
		<!-- Main content Start -->
		<p class="notification">This site is under development. please contact: 01910922069 or visit our <a href="www.sahadat.xyz">Site</a></p>
		<div class="main-content">
			@yield('content')
		</div> 
		<!-- Main content End -->
	 
		<!-- Footer Start -->
		@include('frontend.layouts.partials.footer')
		<!-- Footer End -->

		<!-- start scrollUp  -->
		<div id="scrollUp">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- End scrollUp  -->

		<!-- Search Modal Start -->
		<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
		    <div class="modal-dialog modal-dialog-centered">
		        <div class="modal-content">
		            <div class="search-block clearfix">
		                <form>
		                    <div class="form-group">
		                        <input class="form-control" placeholder="Search Here..." type="text">
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Search Modal End -->

		<!-- modernizr js -->
		<script src="{{ asset('assets/frontend/js/modernizr-2.8.3.min.js') }}"></script>
		<!-- jquery latest version -->
		<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
		<!-- Bootstrap v4.4.1 js -->
		<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
		<!-- op nav js -->
		<script src="{{ asset('assets/frontend/js/jquery.nav.js') }}"></script>
		<!-- owl.carousel js -->
		<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
		<!-- isotope.pkgd.min js -->
		<script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
		<!-- wow js -->
		<script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
		<!-- Skill bar js -->
		<script src="{{ asset('assets/frontend/js/skill.bars.jquery.js') }}"></script>
		<!-- imagesloaded js -->
		<script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
		<!-- Slick js -->
		<script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
		<!-- waypoints.min js -->
		<script src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
		<!-- magnific popup js -->
		<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
		<!-- counterup.min js -->
		<script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script> 
		<!-- Nivo slider js -->
		<script src="{{ asset('assets/frontend/inc/custom-slider/js/jquery.nivo.slider.js') }}"></script>		
		<!-- contact form js -->
		<script src="{{ asset('assets/frontend/js/contact.form.js') }}"></script>
		<!-- main js -->
		<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
	</body>

</html>