
@extends('layouts.app')

@section('content')
  <!-- end nav -->
    <div class="banner">
        <div id="rev_slider_35_1" class="rev_slider fullwidthabanner">
            <ul>
                <li data-transition="scaledownfromtop" data-masterspeed="700"> <img class="responsive"
                        src="{{asset('assets/images/HOMEPAGE.webp')}}" alt="Image" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption lfb ltt tp-resizeme start" data-x="center" data-hoffset="0" data-y="center"
                        data-voffset="0" data-speed="600" data-start="400" data-easing="Power4.easeOut"
                        data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                        data-endspeed="500" data-endeasing="Power4.easeIn">
                        <div class="slide-content">
                            {{-- <h2><b>Complete Solutions <BR>From This Time Forth.</b></h2>
                            <h5>Every Problem has a Solution and We have one for You !</h5>
                            <div class="clearfix">
                                <a href="#">GET STARTED</a>
                            </div>
                            <img src="{{ asset('assets/images/mouse.png')}}" alt="Image" class="icon"> --}}
                        </div>
                    </div>
                </li>
                <!-- end banner 1 -->
                {{-- <li data-transition="scaledownfromtop" data-masterspeed="700"> <img class="responsive"
                        src="{{asset('assets/images/HOME2.gif')}}" alt="Image" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption lfb ltt tp-resizeme start" data-x="center" data-hoffset="0" data-y="center"
                        data-voffset="0" data-speed="600" data-start="400" data-easing="Power4.easeOut"
                        data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                        data-endspeed="500" data-endeasing="Power4.easeIn">
                        <div class="slide-content">
                            <h2><b>Complete Solutions <BR>From This Time Forth.</b></h2>
                            <h5>Every Problem has a Solution and We have one for You !</h5>
                            <div class="clearfix">
                                <a href="#">GET STARTED</a>
                            </div>
                            <img src="{{ asset('assets/images/mouse.png')}}" alt="Image" class="icon">
                        </div>
                    </div>
                </li> --}}
                <!-- end banner 2 -->
            </ul>
            <!-- end ul -->
        </div>
        <!-- end rev_slider -->
    </div>
    <!-- end banner -->
{{-- </header> --}}

<!-- end header -->


<section class="about-us" style="color: black;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 left-side" data-stellar-background-ratio="0.5"> </div>
        <!-- end col-6 -->
        <div class="col-md-6 right-side">
          <div class="table wow fadeInUp">
            <div class="inner">
              <h3>ABOUT <span>MiscArchive</span></h3>
              <p>Our goal is to emerge as the first and excellent choice for enterprise-wide solutions as a Branding agency and a poadcasting partner in Trivandrum with our team of closely-knit yet enthusiastic individuals.</p>
              <p> At MiscArchive, we provide high-quality or innovative value-added solutions within the domains of digital marketing services, Web Designing, Web development, Social Media management, and other comparable miscellaneous services. We assist our clients through expert-level ideation, comprehensive project execution, seamless work experience, easy interactive team collaboration, and overall team transparency for absolutely everyone involved.</p>
              <a href="about-us.html">READ MORE</a> </div>
            <!-- end inner --> 
          </div>
          <!-- end table --> 
        </div>
        <!-- end col-6 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>



<!-- end fun-facts -->

<!-- end logos -->
<section class="latest-news" style="color: black;">
    <br><br><br><br><br><br><br><BR>
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-xs-12">

                <h3>Latest <span>Blogs</span></h3>
            </div>
            <!-- end col-12 -->
            <div class="col-md-6">
                <div class="news-box">
                    <figure><img src="{{asset('assets/images/blogs/RPA.png')}}" alt="Image"></figure>
                    <h4>So what are Ai and RPA?</h4>
                    <!-- <small>Photography, Design, Tutorials</small> -->
                    <p>In the present world, RPA and AI are becoming more and more significant. They can assist
                        businesses in automating routine processes to boost productivity and cut costs. Data input,
                        customer support, and accounting are a few examples of high-volume, low-complexity operations
                        that can be automated with RPA. Contrarily, more difficult jobs like natural language
                        processing, image identification, and predictive analytics can be performed using artificial
                        intelligence (AI). AI may be used to create intelligent robots and systems that can work
                        independently and learn from their experiences. RPA and AI are transforming the way work is done
                        and helping organizations stay competitive in a rapidly changing digital landscape.</p>
                    <a href="AI&RPA.html" class="link">READ MORE</a>
                </div>
                <!-- end news-box -->
            </div>
            <!-- end col-6 -->
            <div class="col-md-6">
                <div class="news-box">
                    <figure><img src="{{asset('assets/images/blogs/PPC.png')}}" alt="Image"></figure>
                    <h4>Pay Per Clicks in 2023</h4>
                    <!-- <small>Photography, Design, Tutorials</small> -->
                    <p>Misc Archive is a digital marketing agency in Trivandrum that specialises in providing cheap and
                        high-quality digital marketing services to all kinds of businesses. We work with businesses of
                        all sizes to develop customised digital marketing solutions that help them reach their goals.
                        Our team of experts is always looking for ways to get your business in front of the right people
                        and drive traffic to your website. One of the ways we do this is by setting up a Pay Per Click
                        (PPC) campaign using Google Ads. Pay Per Click (PPC) campaigns using Google Ads are one of the
                        most powerful tools available for quickly getting your business in front of potential customers.
                    </p>
                    <a href="PPC.html" class="link">READ MORE</a>
                </div>
                <!-- end news-box -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end latest-news -->



<section class="quote" data-stellar-background-ratio="0.5">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-xs-12">
                <div class="content-box">
                    <h3>Discover how we can assist you!</h3>
                    <p>We are delighted to hear from you and are excited to learn more about your project or business.
                        Our team of experts is always eager to provide top-notch digital marketing and web development
                        services tailored to your unique needs.

                        Please use the form below to send us a message. We aim to respond to all inquiries very fast.
                        Don't hesitate to ask us any questions you may have, and let us know how we can assist you in
                        achieving your business goals.

                        Thank you for considering our services. We look forward to hearing from you soon!</p>
                    <a href="#"class="hamburger-menu">Get In Touch</a>
                </div>
                <!-- end content-box -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

@endsection
