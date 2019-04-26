<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/favicon/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/favicon/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('frontend/favicon/site.webmanifest') }}">

	<!-- Author Meta -->
	<meta name="author" content="SeedAvest">
	<!-- Meta Description -->
	<meta name="description" content="Seedavest is a specialist farmer’s service organization. We create, connect and bring opportunities that secures better livelihood for smallholder farmers. We also link processors to viable sources of quality agro produces and take on farm projects for investors.">
	<!-- Meta Keyword -->
	<meta name="keywords" content="Crops, Seeds, Nigeria Agriculture, Farming in Nigeria, Ekiti State">
	<!-- meta character set -->
	<meta charset="UTF-8">

	<title>{{ config('app.name') }} @yield('title')</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
  
  <link rel="stylesheet" href="{{ asset('frontend/css/linearicons.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
  @yield('css')
</head>
<body>
  <header id="header">
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
            <a href="/"><img src="{{ asset('frontend/images/logo.png') }}" alt="{{ config('app.name') }}" width="200" height="90"/></a>
          </div>
          <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
            <a class="btns" href="tel:+2348030675412">+234 (0) 803 067 5412</a>
            <a class="btns" href="tel:+2348067353063">+234 (0) 806 735 3063</a>
            <a class="btns" href="mailto:info@seedavest.com">info@seedavest.com</a>
            <a class="icons" href="tel:+2348030675412">
              <span class="lnr lnr-phone-handset"></span>
            </a>
            <a class="icons" href="tel:+2348067353063">
              <span class="lnr lnr-phone-handset"></span>
            </a>
            <a class="icons" href="mailto:info@seedavest.com">
              <span class="lnr lnr-envelope"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container main-menu">
      <div class="row align-items-center justify-content-between d-flex">
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">About</a>
              <div class="dropdown-menu nav-drop">
                <a class="dropdown-item" href="/whoweare">Who We Are</a>
                <a class="dropdown-item" href="/ourteam">Our Team</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Our Approach</a>
              <div class="dropdown-menu nav-drop">
                <a class="dropdown-item" href="/whatweoffer">What We Offer</a>
                <a class="dropdown-item" href="/theapproach">The Approach</a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="/achievements">Achievements</a></li>
            <li class="nav-item"><a class="nav-link" href="/events">Events and Seminars</a></li> 
            <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li> 
            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
          </ul>
        </nav>
        <!-- #nav-menu-container -->
        <div class="menu-social-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </header>
  <!-- #header -->

  @yield('content')

  @include('frontend.layouts.footer')

  <script src="{{ asset('frontend/js/vendor/jquery-2.2.4.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/easing.min.js') }}"></script>
  <script src="{{ asset('frontend/js/hoverIntent.js') }}"></script>
  <script src="{{ asset('frontend/js/superfish.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  @yield('js')
</body>
</html>