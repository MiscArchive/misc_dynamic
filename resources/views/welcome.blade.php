
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
              <h3> <span>What makes us a team?</span></h3>
              <p>Misc Archive is the Best Digital Marketing Company In Trivandrum. We specialise in creating custom marketing solutions for brands and businesses in India and throughout the world.
                By skilfully fusing the 3 C’s of marketing-Customer, Company, Competitor- with the influence of the web, social media marketing, and mobile technology, our team enables our clients to realise their full potential.
                </p>
              {{-- <p> At MiscArchive, we provide high-quality or innovative value-added solutions within the domains of digital marketing services, Web Designing, Web development, Social Media management, and other comparable miscellaneous services. We assist our clients through expert-level ideation, comprehensive project execution, seamless work experience, easy interactive team collaboration, and overall team transparency for absolutely everyone involved.</p> --}}
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
        <a  href="{{route('service')}}">
        <div class="col-md-3 no-padding">
          <div class="box yellow-bg">
            <div class="table">
              <div class="inner"> <img src="{{asset('assets/images/dm.png')}}" alt="Image">
                <h4>Branding </h4>
                <p>Misc Archive is a leading Digital Marketing Company in Trivandrum. We're dedicated to helping you shape your brand identity and elevate your impact in the world through branding. <br><br> </p>
                
                <a  href="{{route('service')}}"><span  class="expand btn1">EXPAND</span></a> </div>
              <!-- end inner --> 
            </div>
            <!-- end table --> 
          </div>
          <!-- end box --> 
        </div></a>
        <!-- end col-3 -->
        <a  href="{{route('service')}}">
        <div class="col-md-3 no-padding">
          <div class="box yellow-bg">
            <div class="table">
              <div class="inner"> <img src="{{asset('assets/images/web devolepment 1.png')}}" alt="Image">
                <h4>Web  Development</h4>
                <p>Misc Archive is one of the finest web development companies in Trivandrum. We're passionate about turning your online presence into a masterpiece. A custom-built website is our main attraction.</p>
                
                <a  href="{{route('service')}}"><span  class="expand btn1">EXPAND</span></a></div>
              <!-- end inner --> 
            </div>
            <!-- end table --> 
          </div>
          <!-- end box --> 
        </div>
      </a>
        <!-- end col-3 -->
        <a  href="{{route('service')}}">
        <div class="col-md-3 no-padding">
          <div class="box yellow-bg">
            <div class="table">
              <div class="inner"> <img src="{{asset('assets/images/mic.png')}}" alt="Image">
                <h4>Audible</h4>
                <p>Misc Archive offers a creative hub where sounds and technology collide. The music studio serves as a refuge for both audiophiles and artists. <br><br><br></p>
               
                <a  href="{{route('service')}}"><span  class="expand btn1">EXPAND</span></a> </div>
              <!-- end inner --> 
            </div>
            <!-- end table --> 
          </div>
          <!-- end box --> 
        </div></a>
        <!-- end col-3 -->
        <a  href="{{route('service')}}">
        <div class="col-md-3 no-padding">
          <div class="box yellow-bg">
            <div class="table">
              <div class="inner"> <img src="{{asset('assets/images/branding.png')}}" alt="Image">
                <h4>Event Managment</h4>
                <p>We are the best event management company in Trivandrum from planning to organising, and executing a wide range of events. Corporate conferences, brand launches, music concerts to trade exhibitions etc.  </p>
  
                <a  href="{{route('service')}}"><span class="expand btn4">EXPAND</span></a> </div>
              <!-- end inner --> 
            </div>
            <!-- end table --> 
          </div>
          <!-- end box --> 
        </div></a>
        <!-- end col-3 --> 
      </div>
      <!-- end row --> 

      <div class="row">
        <a  href="{{route('service')}}"><div class="col-md-3 no-padding">
          <div class="box yellow-bg">
            <div class="table">
              <div class="inner"> <img src="{{asset('assets/images/dm.png')}}" alt="Image">
                <h4>Digital Marketing</h4>
                <p>Misc Archive is the best digital marketing company in Trivandrum. In a world driven by data, innovation, and connectivity, the key to your business success lies in digital marketing.<br><br></p>
                
                <a  href="{{route('service')}}"><span  class="expand btn1">EXPAND</span></a> </div>
              <!-- end inner --> 
            </div>
            <!-- end table --> 
          </div>
          <!-- end box --> 
        </div></a>
        <!-- end col-3 -->
        <a  href="{{route('service')}}">
        <div class="col-md-3 no-padding">
          <div class="box yellow-bg">
            <div class="table">
              <div class="inner"> <img src="{{asset('assets/images/web devolepment 1.png')}}" alt="Image">
                <h4>Mobile App Development</h4>
                <p>At Misc Archive, we're dedicated to turning your app vision into a reality that exceeds expectations. With an experienced web development team, we're here to satisfy our customers' needs. </p>
                
                <a  href="{{route('service')}}"><span  class="expand btn1">EXPAND</span></a></div>
              <!-- end inner --> 
            </div>
            <!-- end table --> 
          </div>
          <!-- end box --> 
        </div></a>
        <!-- end col-3 -->
        <a  href="{{route('service')}}">
        <div class="col-md-3 no-padding">
          <div class="box yellow-bg">
            <div class="table">
              <div class="inner"> <img src="{{asset('assets/images/web devolepment 1.png')}}" alt="Image">
                <h4>Graphic Designing</h4>
                <p>Graphic design is the centre of attraction for any business. We at Misc Archive create unique graphic designs that help improve your business's online visibility. <br><br></p>
               
                <a  href="{{route('service')}}"><span  class="expand btn1">EXPAND</span></a> </div>
              <!-- end inner --> 
            </div>
            <!-- end table --> 
          </div>
          <!-- end box --> 
        </div></a>
        <!-- end col-3 -->
        <a  href="{{route('service')}}">
        <div class="col-md-3 no-padding">
          <div class="box yellow-bg">
            <div class="table">
              <div class="inner"> <img src="{{asset('assets/images/ai.png')}}" alt="Image">
                <h4>RPA / AI</h4>
                <p>We provide maintenance and support for the RPA and AI solutions,Along with the training we provide to the client's employees on how to use and interact with the RPA and AI solutions. <br><br> </p>
  
                <a  href="{{route('service')}}"><span class="expand btn4">EXPAND</span></a> </div>
              <!-- end inner --> 
            </div>
            <!-- end table --> 
          </div>
          <!-- end box --> 
        </div></a>
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
