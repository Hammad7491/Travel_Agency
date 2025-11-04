<!DOCTYPE html>
<!-- Treko - Software & Startup Premium Landing Page Template design by Jthemes (http://www.jthemes.net) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">



	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content="Treko - Software & Startup Premium Landing Page Template"/>
		<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, Landing, Startup, Software, Business, Company, Creative, Freelancers">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>Treko - Software & Startup Premium Landing Page Template</title>
							<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- Animate.css for flip animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<!-- Bootstrap CSS (if not already included) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">



<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<!-- Animate CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


<!-- AOS Animation Library -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>



		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">		
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:300,400,500,700,900" rel="stylesheet"> 

		<!-- BOOTSTRAP CSS -->
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">		
		<link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet">	
		<link id="effect" href="{{ asset('assets/css/dropdown-effects/fade-down.css') }}" media="all" rel="stylesheet">
		<link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">	
		<link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">

		<!-- ON SCROLL ANIMATION -->
		<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
	
		<!-- TEMPLATE CSS -->
		<!-- <link href="{{ asset('assets/css/brick-theme.css') }}" rel="stylesheet">     -->
	    <!-- <link href="{{ asset('assets/css/dimgreen-theme.css') }}" rel="stylesheet">  -->  
	    <!-- <link href="{{ asset('assets/css/green-theme.css') }}" rel="stylesheet">     --> 
	    <!-- <link href="{{ asset('assets/css/indigo-theme.css') }}" rel="stylesheet">    --> 
	    <!-- <link href="{{ asset('assets/css/orangered-theme.css') }}" rel="stylesheet"> -->
	    <!-- <link href="{{ asset('assets/css/pink-theme.css') }}" rel="stylesheet">      -->
	    <!-- <link href="{{ asset('assets/css/red-theme.css') }}" rel="stylesheet">       --> 
	    <!-- <link href="{{ asset('assets/css/royalblue-theme.css') }}" rel="stylesheet"> --> 
	    <link href="{{ asset('assets/css/skyblue-theme.css') }}" rel="stylesheet">
	    <!-- <link href="{{ asset('assets/css/violet-theme.css') }}" rel="stylesheet">    -->

		<!-- RESPONSIVE CSS -->
		<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet"> 
	
	</head>




	<body>



		<!-- PRELOADER SPINNER
		============================================= -->	
		{{-- <div id="loader-wrapper">
			<div id="loading">
				<div class="cssload-loader">
					<div class="cssload-ball cssload-ball-1"></div>
					<div class="cssload-ball cssload-ball-2"></div>
					<div class="cssload-ball cssload-ball-3"></div>
					<div class="cssload-ball cssload-ball-4"></div>
				</div>
			</div>
		</div> --}}




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">


@include('layouts.header')


@yield('content')





@include('layouts.footer')<!-- END HEADER -->





		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>	
		<script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.scrollto.js') }}"></script>	
		<script src="{{ asset('assets/js/menu.js') }}"></script>	
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/js/contact-form.js') }}"></script>
		<script src="{{ asset('assets/js/register-form.js') }}"></script>
		<script src="{{ asset('assets/js/request-form.js') }}"></script>
		<script src="{{ asset('assets/js/comment-form.js') }}"></script>	
		<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('assets/js/wow.js') }}"></script>		
		<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- WOW JS -->

		<script>
			new WOW().init();
		</script>	

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  // Disable AOS on screens smaller than 768px
  if (window.innerWidth >= 768) {
      AOS.init();
  } else {
      // Remove all AOS attributes on mobile
      document.querySelectorAll('[data-aos]').forEach(el => {
          el.removeAttribute('data-aos');
          el.removeAttribute('data-aos-duration');
          el.removeAttribute('data-aos-delay');
      });
  }
</script>


	</body>



</html>	