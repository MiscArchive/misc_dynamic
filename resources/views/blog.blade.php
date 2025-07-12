
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
                                <img src="assets/images/blogs/misc-blog.jpg" alt="img">
                            </div>
                        </div>                        
                        <div class="service-info">
                            <span>Digital Marketing  /  July 1, 2025</span>
                            <h5>The Importance of Selecting the Appropriate Digital Marketing Company in Trivandrum</h5>
                                      <a href="{{route('blog1')}}" class="link">READ MORE</a>
                        </div>
                    </div>
                </div>
          {{-- blog 2 --}}
               <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-container blog-container wow fadeInDown">
                        <div class="service-content-wrapper">
                            <div class="service-content-wrapper-overlay wow"></div>
                            <div class="service-image blog-image">
                                <img src="assets/images/blogs/RPA.png" alt="img">
                            </div>
                        </div>                        
                        <div class="service-info">
                            <span>Digital Marketing  /  October 27, 2024</span>
                            <h5>So what are Ai and RPA?</h5>
                                      <a href="{{route('ai-rpa')}}" class="link">READ MORE</a>
                        </div>
                    </div>
                </div>

              {{-- blog 3 --}}
              <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-container blog-container wow fadeInDown">
                        <div class="service-content-wrapper">
                            <div class="service-content-wrapper-overlay wow"></div>
                            <div class="service-image blog-image">
                                <img src="assets/images/blogs/PPC.png" alt="img">
                            </div>
                        </div>                        
                        <div class="service-info">
                            <span>Digital Marketing  /  October 27, 2024</span>
                            <h5>Pay Per Clicks in 2023</h5>
                                      <a href="{{route('ppc')}}" class="link">READ MORE</a>
                        </div>
                    </div>
                </div>
            {{-- blog 4 --}}
            <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-container blog-container wow fadeInDown">
                        <div class="service-content-wrapper">
                            <div class="service-content-wrapper-overlay wow"></div>
                            <div class="service-image blog-image">
                                <img src="assets/images/blogs/SEO1.jpg" alt="img">
                            </div>
                        </div>                        
                        <div class="service-info">
                            <span>Digital Marketing  /  October 27, 2024</span>
                            <h5>Search Engine Optimisation</h5>
                                      <a href="{{route('seo')}}" class="link">READ MORE</a>
                        </div>
                    </div>
                </div>

                {{-- blog 5 --}}
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-container blog-container wow fadeInDown">
                        <div class="service-content-wrapper">
                            <div class="service-content-wrapper-overlay wow"></div>
                            <div class="service-image blog-image">
                                <img src="assets/images/blogs/smm.jpg" alt="img">
                            </div>
                        </div>                        
                        <div class="service-info">
                            <span>Digital Marketing  /  October 27, 2024</span>
                            <h5>Why do Social Media Marketing ?</h5>
                                      <a href="{{route('smm')}}" class="link">READ MORE</a>
                        </div>
                    </div>
                </div>
{{-- -------------------------------------- --}}
   
      
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
</section>

{{-- <section class="quote" data-stellar-background-ratio="0.5">
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
</section> --}}

@endsection
