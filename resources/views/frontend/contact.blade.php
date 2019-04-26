@extends('frontend.layouts.app')

@section('title')
  - Contact Us
@endsection

@section('content')
  <!-- start banner Area -->
  <section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white">Contact Us</h1>	
          <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span> Contact Us</p>
        </div>	
      </div>
    </div>
  </section>
  <!-- End banner Area -->
  <!-- Start contact-page Area -->
  <section class="contact-page-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12- col-sm-12 section-gap">
          <iframe width="100%" height="445" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Iworoko%20rd%2C%20Ekiti%20State'+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Map a route</a></iframe>
        </div>
        
        <div class="col-lg-4 d-flex flex-column address-wrap">
          <div class="single-contact-address d-flex flex-row">
            <div class="icon">
              <span class="lnr lnr-home"></span>
            </div>
            <div class="contact-details">
              <h5>Ado-Ekiti, Ekiti State</h5>
              <p>
                No.22 Similoluwa, Along Eksuth Road, Ado-Ekiti, Nigeria.
              </p>
            </div>
          </div>
          <div class="single-contact-address d-flex flex-row">
            <div class="icon">
              <span class="lnr lnr-phone-handset"></span>
            </div>
            <div class="contact-details">
              <p>+234 803 067 5412</p>
              <p>+234 806 735 3063</p>
            </div>
          </div>
          <div class="single-contact-address d-flex flex-row">
            <div class="icon">
              <span class="lnr lnr-envelope"></span>
            </div>
            <div class="contact-details">
              <p>info@seedavest.com</p>
            </div>
          </div>														
        </div>
        <div class="col-lg-8">
          <form class="form-area contact-form text-right" id="myForm" action="scripts/mail.php" method="post">
            <div class="row">	
              <div class="col-lg-6 form-group">
                <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
              
                <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                <input name="phone" placeholder="Enter your phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone number'" class="common-input mb-20 form-control" required="" type="phone">

                <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
              </div>
              <div class="col-lg-6 form-group">
                <textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
              </div>
              <div class="col-lg-12">
                <div class="alert-msg" style="text-align: left;"></div>
                <button class="genric-btn primary circle" style="float: right;">Send Message</button>
              </div>
            </div>
          </form>	
        </div>
      </div>
    </div>	
  </section>
  <!-- End contact-page Area -->
@endsection