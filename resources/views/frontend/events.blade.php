@extends('frontend.layouts.app')

@section('title')
  - Events & Seminars
@endsection

@section('content')
  <!-- start banner Area -->
  <section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white">Events & Seminars</h1>	
          <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span> Events & Seminars</p>
        </div>	
      </div>
    </div>
  </section>
  <!-- End banner Area -->
  <!-- Start team Area -->
  <section class="team-area section-gap" id="team">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">Events & Seminars</h1>
          </div>
        </div>
      </div>
      <div class="row justify-content-center d-flex align-items-center">
        <div class="col-lg-3 col-md-6 single-team">
          <div class="thumb">
            <img class="img-fluid" src="{{ asset('frontend/images/event-1.png') }}" alt="Event">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 single-team">
          <div class="thumb">
            <img class="img-fluid" src="{{ asset('frontend/images/event-2.png') }}" alt="Event">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End team Area -->
@endsection