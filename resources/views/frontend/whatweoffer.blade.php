@extends('frontend.layouts.app')

@section('title')
  - What We Offer
@endsection

@section('content')
  <!-- start banner Area -->
  <section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white">What We Offer</h1>	
          <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  What We Offer</p>
        </div>	
      </div>
    </div>
  </section>
  <!-- End banner Area -->
  <!-- Start service Area -->
  <section class="service-area section-gap" id="services">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 pb-40 header-text text-center">
          <h1 class="pb-10">What we Offer</h1>
          <p>Who are in extremely love with eco friendly system.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="single-service">
            <img class="img-fluid" src="{{ asset('frontend/images/img1.png') }}" alt="">
            <h4>Research</h4>
            <p>We embark on various researches to ensure adequate data will be provided to aid decision making in the business of Agriculture especially in Ekiti state</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-service">
            <img class="img-fluid" src="{{ asset('frontend/images/img2.jpg') }}" alt="">
            <h4>Capacity Building and Training</h4>
            <p>Consistently training and supporting our members to acheive agricultural best practices</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-service">
            <img class="img-fluid" src="{{ asset('frontend/images/img3.png') }}" alt="">
            <h4>Collaboration</h4>
            <p>We develop and operate a highly effective farmers cooperative society that focuses on ensuring all players have their needs met</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-service">
            <img class="img-fluid" src="{{ asset('frontend/images/img4.jpg') }}" alt="">
            <h4>Business Development</h4>
            <p>We will continue to cultivate patnership and business relationship that will create platforms for members to sell their agricultural yeilds. We will at every point of sales ensure customer satisfaction.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service Area -->
@endsection
