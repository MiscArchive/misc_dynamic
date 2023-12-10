@extends('layouts.app')

@section('content')
<div class="transition-overlay yellow-bg"></div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="title">ABOUT US</h2>
                        <h5 class="sub-title">Interactive digital experiences are continually</h5>
                    </div>
                </div>
            </div>
        </header>
        <section class="about-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 left-side" data-stellar-background-ratio="0.5"> </div>
                    <!-- end col-6 -->
                    <div class="col-md-6 right-side">
                        <div class="table wow fadeInUp">
                            <div class="inner">
                                <h3>ABOUT <span>MiscArchive</span></h3>
                                <p>Our goal is to emerge as the first and excellent choice for enterprise-wide solutions as
                                    a Branding agency and a poadcasting partner in Trivandrum with our team of closely-knit
                                    yet enthusiastic individuals.</p>
                                <p>At Miscarchive, we provide high-quality or innovative value-added solutions within the
                                    domains of digital marketing services, Web Designing, Web development, Social Media
                                    management, and other comparable miscellaneous services. We assist our clients through
                                    expert-level ideation, comprehensive project execution, seamless work experience, easy
                                    interactive team collaboration, and overall team transparency for absolutely everyone
                                    involved.</p>
                               
                            </div>
                            <!-- end inner -->
                        </div>
                        <!-- end table -->

                    </div>
                    <!-- end col-6 -->
                </div>
            </div>
        </section>

{{-- 
        <section class="team-members">
            <br><br><br><br><br><br><br>
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <figure><img src="{{ asset('assets/images/sunny.webp') }}" alt="Image">
                            <figcaption>
                                <h3>Anoop D Anil</h3>
                                <h6>Vice President, CFO</h6>
                            </figcaption>
                        </figure>
                    </div>
                 
                    <div class="col-md-3 col-sm-3">
                        <figure><img src="{{ asset('assets/images/anoop.webp') }}" alt="Image">
                            <figcaption>
                                <h3>Anoop Krishna</h3>
                                <h6>CEO, FOUNDER</h6>
                            </figcaption>
                        </figure>
                    </div>
                   
                    <div class="col-md-3 col-sm-3">
                        <figure><img src="{{ asset('assets/images/anju.webp') }}" alt="Image">
                            <figcaption>
                                <h3>Rohini A Pillai</h3>
                                <h6>Co-Founder, COO</h6>
                            </figcaption>
                        </figure>
                    </div>
                    
                    <div class="col-md-3 col-sm-3">
                        <figure><img src="{{ asset('assets/images/akhil (1).webp') }}" alt="Image">
                            <figcaption>
                                <h3>Akhil G V</h3>
                                <h6>Vice President, Creative Head</h6>
                            </figcaption>
                        </figure>
                    </div>
                  
                </div>
               
            </div>
            
        </section> --}}
        <!-- end team-members -->

        <!-- end fun-facts -->
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
        <!-- end logos -->
        <section class="quote" data-stellar-background-ratio="0.5">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="content-box">
                            <h3>Discover how we can assist you!</h3>
                            <p>Don't settle for mediocrity; choose Miscarchives as your trusted digital marketing partner. Join the ranks of businesses that have experienced unparalleled success with us. Contact us today to embark on your journey to digital greatness.

                           </p>
                            <a href="#" class="hamburger-menu">Get In Touch</a>
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
