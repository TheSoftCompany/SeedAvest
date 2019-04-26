@extends('frontend.layouts.app')

@section('title')
  - Achievements
@endsection

@section('content')
  <!-- start banner Area -->
  <section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white">Achievements</h1>	
          <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span> Achievements</p>
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
            <h1 class="mb-10">Achievements</h1>
          </div>
        </div>
      </div>							
      <div class="row">
        <div class="col-lg-6">
          <div class="single-feature d-flex flex-row">
            <div class="details">
              <p>
                Entered into strategic alliance with Ekiti State Government to promote youth entrepreneurship in Agriculture. Trained over 100 youths and position them to explore the downstream (processing of high-end cassava products) in partnership with the Niji Group (2018).
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="single-feature d-flex flex-row">
            <!-- <div class="icon">
              <span class="lnr lnr-heart-pulse"></span>
            </div> -->
            <div class="details">
              <!-- <h4>Expert Consultation</h4> -->
              <p>
                Successfully completed a local purchase order (LPO) over 10,000 tons of plantain (2018).
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="single-feature d-flex flex-row">
            <div class="details">
              <p>
                Successfully facilitated a trade negotiation that benefited over 500 cassava farmers (2018).
              </p>
            </div>
          </div>
        </div>												
        <div class="col-lg-6">
          <div class="single-feature d-flex flex-row">
            <div class="details">
              <p>
                Acquired the Ekiti State River Basin Integrated Poultry Farm. Secured a trade deal with L & Z to supply over 5000 broilers per annum (2019).
              </p>
            </div>
          </div>
        </div>							
      </div>
    </div>
  </section>
  <!-- End feature Area -->
@endsection