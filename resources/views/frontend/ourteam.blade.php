@extends('frontend.layouts.app')

@section('title')
  - Our Team
@endsection

@section('content')
  <!-- start banner Area -->
  <section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white">Our Team</h1>	
          <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span> Our Team</p>
        </div>	
      </div>
    </div>
  </section>
  <!-- End banner Area -->
  <!-- Start testomial Area -->
  <section class="testomial-area section-gap">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-60 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">Our Team</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="active-testimonial-carusel">
          <div class="single-testimonial item">
            <img class="mx-auto img-circle" src="{{ asset('frontend/images/img20.png') }}" alt="EKUNDAYO Mayowa">
            <p class="desc">
              Prio SeedAvest, he was the team-lead of one of MTN’s branch in Ado Ekiti where he worked for 8 years. He also founded Maiyun Multiglobal Koncept Ltd, a company that provides Business expansion services to farms with processed products across SW Nigeria. HIs company has Niyya Farms, L&Z Farms, Wilsons Juice co as clients.
            </p>
            <h4>EKUNDAYO Mayowa</h4>
            <p>Executive Director, Co-founder</p>
          </div>
          <div class="single-testimonial item">
            <img class="mx-auto img-circle" src="{{ asset('frontend/images/img21.png') }}" alt="FASAKIN Aduragbemi">
            <p class="desc">
              FASAKIN Aduragbemi Victor is an highly sought after Agribusiness Development Consultant, Extentionist,Organic farmer,Public Health Educator and a Life Coach.
            </p>
            <h4>FASAKIN Aduragbemi</h4>
            <p>Head of Operations, Co-founder</p>
          </div>
          <div class="single-testimonial item">
            <img class="mx-auto img-circle" src="{{ asset('frontend/images/img22.png') }}" alt="ARIBASOYE Tunji">
            <p class="desc">
              Adetunji Aribasoye has over 3 years work experience as an Administrative and Accounting Assistant in the office of the Personal Assistant to the Governor of Ekiti State.
            </p>
            <h4>ARIBASOYE Tunji</h4>
            <p>Director of Finance, Co-founder</p>
          </div>
          <div class="single-testimonial item">
            <img class="mx-auto img-circle" src="{{ asset('frontend/images/img23.png') }}" alt="">
            <p class="desc">
              Patricia Kehinde is an educationist, a linguist, a polyglot par excellence, an impeccable researcher, a farmer, a nation builder and a mentor.
            </p>
            <h4>KEHINDE Patricia</h4>
            <p>Secretary, Co-founder</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testomial Area -->
@endsection