
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="title">BLOG</h2>
        <h5 class="sub-title">Digital experiences are continually</h5>
      </div>
    </div>
  </div>
</header>
<section class="blog">
  <div class="container">
    <div class="row">
      {{-- ---------------------------------- --}}
        <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-container blog-container wow fadeInDown">
                        <div class="service-content-wrapper">
                            <div class="service-content-wrapper-overlay wow"></div>
                            <div class="service-image blog-image">
                                <img src="assets/images/blogs/dm-img.jpg" alt="img">
                            </div>
                        </div>                        
                        <div class="service-info">
                            <span>Personal Care   /   October 27, 2024</span>
                            <h5>The Importance of Selecting the Appropriate Digital Marketing Company in Trivandrum</h5>
                                      <a href="{{route('blog1')}}" class="link">READ MORE</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-container blog-container wow fadeInUp">
                        <div class="service-content-wrapper">
                            <div class="service-content-wrapper-overlay wow"></div>
                            <div class="service-image blog-image">
                                <img src="assets/images/blogs/dm-img.jpg" alt="img">
                            </div>
                        </div>                        
                        <div class="service-info">
                            <span>Industrial Cleaning  /   October 27, 2024</span>
                            <h5>Understanding Industrial Cleaning Solutions: What Works Best for Heavy-Duty</h5>
                            <a href="#">More Details <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
{{-- -------------------------------------- --}}
   
      
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
</section>
<section class="quote" data-stellar-background-ratio="0.5">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-xs-12">
        <div class="content-box">
          <h3>Discover how we can assist you!</h3>
          <p>We are delighted to hear from you and are excited to learn more about your project or business. Our team of experts is always eager to provide top-notch digital marketing and web development services tailored to your unique needs.

            Please use the form below to send us a message. We aim to respond to all inquiries very fast. Don't hesitate to ask us any questions you may have, and let us know how we can assist you in achieving your business goals.
            
            Thank you for considering our services. We look forward to hearing from you soon!</p>
          <a href="#"class="hamburger-menu">Get In Touch</a> </div>
        <!-- end content-box --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>

@endsection
