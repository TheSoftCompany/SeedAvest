@extends('frontend.layouts.app')

@section('title')
  - The Approach
@endsection

@section('content')
  <!-- start banner Area -->
  <section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white">The Approach</h1>	
          <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span> The Approach</p>
        </div>	
      </div>
    </div>
  </section>
  <!-- End banner Area -->
  <!-- Start feature Area -->
  <section class="feature-area section-gap">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-60 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">The Approach</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="single-defination">
            <h4 class="mb-20 text-center">Investors Delight</h4>
            <p>We enable investors make informed decision in their agribusiness endeavours. We set up and manage highly productive and successful plantain, pineapple and poultry farms.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-defination">
            <h4 class="mb-20 text-center">Cooperation</h4>
            <p>We develop and operate highly effective farmers’ cooperatives. We afford processors and aggregators the opportunity of tapping into their guaranteed pool of fresh and quality produces.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-defination">
            <h4 class="mb-20 text-center">Market Insights</h4>
            <p>We provide farmers useful farm/market information to boost their yield and earnings. We conduct trainings on good agronomic practices for farmers and provide investors with up-to-date information on prospective agribusiness investments.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End feature Area -->
@endsection