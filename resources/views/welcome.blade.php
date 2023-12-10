
@extends('layouts.app')

@section('content')
  <!-- end nav -->
    <div class="banner">
        <div id="rev_slider_35_1" class="rev_slider fullwidthabanner">
            <ul>
                <li data-transition="scaledownfromtop" data-masterspeed="700"> <img class="img-fluid" alt="Responsive image"
                        src="{{asset('assets/images/HOMEPAGE.webp')}}"  data-bgposition="center center" data-bgfit="cover"
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
              <a href="{{route('about')}}">READ MORE</a> </div>
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

  <section class="logos">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-xs-12">
                <h2>LOGOS</h2>
                <div class="logos-carousel">
                    <div class="item">
                        <figure><img src="{{ asset('assets/images/C L 01.webp') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->
                    <div class="item">
                        <figure><img src="{{ asset('assets/images/C L 02.webp') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->
                    <div class="item">
                        <figure><img src="{{ asset('assets/images/C L 03.webp') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->
                   
                    <div class="item">
                        <figure><img src="{{ asset('assets/images/C L 05.webp') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->
                    <div class="item">
                        <figure><img src="{{ asset('assets/images/C L 07.webp') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->
                    <div class="item">
                        <figure><img src="{{ asset('assets/images/bulletclub.png') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->
                    <div class="item">
                        <figure><img src="{{ asset('assets/images/bm.png') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->
                    <div class="item">
                        <figure><img src="{{ asset('assets/images/cs.png') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->

                    <div class="item">
                        <figure><img src="{{ asset('assets/images/jsml.png') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->

                
                    <div class="item">
                        <figure><img src="{{ asset('assets/images/navaka.png') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->

                    <div class="item">
                        <figure><img src="{{ asset('assets/images/pounchik.png') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->
                    <div class="item">
                        <figure><img src="{{ asset('assets/images/rainbo.png') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->
                    <div class="item">
                        <figure><img src="{{ asset('assets/images/rrv.png') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->
                    <div class="item">
                        <figure><img src="{{ asset('assets/images/JSM.png') }}" alt="Image"></figure>
                    </div>
                    <!-- end item -->
                </div>
                <!-- end logos-carousel -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
  <section class="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-3 no-padding">
          <div class="box yellow-bg">
            <div class="table">
              <div class="inner"> <img src="{{asset('assets/images/dm.png')}}" alt="Image">
                <h4>Branding & Digital Marketing</h4>
                <p>Misc Archive is a leading Digital Marketing Company in Trivandrum. We're dedicated to helping you shape your brand identity and elevate your impact in the world through branding.Graphic design is the centre of attraction for any business. We at Misc Archive create unique graphic designs that help improve your business's online visibility. </p>
                
                <a  href="{{route('service')}}"><span  class="expand btn1">EXPAND</span></a> </div>
              <!-- end inner --> 
            </div>
            <!-- end table --> 
          </div>
          <!-- end box --> 
        </div>
        <!-- end col-3 -->
        <div class="col-md-3 no-padding">
          <div class="box yellow-bg">
            <div class="table">
              <div class="inner"> <img src="{{asset('assets/images/web devolepment 1.png')}}" alt="Image">
                <h4>Web & Mobile App Development</h4>
                <p>Misc Archive is one of the finest web development companies in Trivandrum. We're passionate about turning your online presence into a masterpiece. A custom-built website is our main attraction.we're dedicated to turning your app vision into a reality that exceeds expectations.<br><br>  </p>
                
                <a  href="{{route('service')}}"><span  class="expand btn1">EXPAND</span></a></div>
              <!-- end inner --> 
            </div>
            <!-- end table --> 
          </div>
          <!-- end box --> 
        </div>
        <!-- end col-3 -->
        <div class="col-md-3 no-padding">
          <div class="box yellow-bg">
            <div class="table">
              <div class="inner"> <img src="{{asset('assets/images/mic.png')}}" alt="Image">
                <h4>Podcast</h4>
                <p>At Misc Archive, we're your best podcast company in Trivandrum for discovering, creating, and sharing the fascinating world of voices.<br><br> <br><br> <br><br> <br> </p>
               
                <a  href="{{route('service')}}"><span  class="expand btn1">EXPAND</span></a> </div>
              <!-- end inner --> 
            </div>
            <!-- end table --> 
          </div>
          <!-- end box --> 
        </div>
        <!-- end col-3 -->
        <div class="col-md-3 no-padding">
          <div class="box yellow-bg">
            <div class="table">
              <div class="inner"> <img src="{{asset('assets/images/branding.png')}}" alt="Image">
                <h4>Event Managment</h4>
                <p>We are the best event management company in Trivandrum from planning to organising, and executing a wide range of events. Corporate conferences, brand launches, music concerts to trade exhibitions etc. <br><br> <br><br> <br> </p>
  
                <span class="expand btn4">EXPAND</span> </div>
              <!-- end inner --> 
            </div>
            <!-- end table --> 
          </div>
          <!-- end box --> 
        </div>
        <!-- end col-3 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
<!-- end service -->

<!-- end logos -->
<section class="latest-news" style="color: black;">
    <br><br><br><br><br><br><br><BR>
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-xs-12">
>
                <h3>Latest <span>Blogs</span></h3
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
                    <figure><img src="{{asset('assets/images/blogs/PPC4.jpg')}}" alt="Image"></figure>
                    <h4>Why Misc Archive is the Best Digital Marketing Company In Trivandrum?</h4>
                    <!-- <small>Photography, Design, Tutorials</small> -->
                    <p>Misc Archive is the Best Digital Marketing Company In Trivandrum. We specialise in creating custom marketing solutions for brands and businesses in India and throughout the world.
                        By skilfully fusing the 3 C’s of marketing-Customer, Company, Competitor- with the influence of the web, social media marketing, and mobile technology, our team enables our clients to realise their full potential.
                        <br>
                        we understand that in the fast-paced world of digital marketing, staying ahead of the curve is paramount. Here's why partnering with us is your best decision and we’ll assure you that we are the “ Best Digital Marketing company in Trivandrum''
                    </p>
                    <a href="{{route('dmn')}}" class="link">READ MORE</a>
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
                    <h3>Why Choose Miscarchive for Your Digital Marketing Needs?</h3>
                    <p>We are delighted to hear from you and are excited to learn more about your project or business.
                        Our team of experts is always eager to provide top-notch digital marketing and web development
                        services tailored to your unique needs.

                        At Miscarchive, we understand that in the fast-paced world of digital marketing, staying ahead of the curve is paramount. Here's why partnering with us is your best decision and we’ll assure you that we are the “ Best Digital Marketing company in Trivandrum''

                </p>
                    <a href="#"class="hamburger-menu">Know More About Us</a>
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
