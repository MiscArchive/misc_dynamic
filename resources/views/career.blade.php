@extends('layouts.app')

@section('content')
<div class="transition-overlay yellow-bg"></div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="title">Career</h2>
                        <h5 class="sub-title">Interactive digital experiences are continually</h5>
                    </div>
                </div>
            </div>
        </header>
        <section class="about-us">
            <div class="container">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                      <img src="{{ asset('assets/images/career/dm-hiring.jpg') }}" alt="Image">
                    </div>
                  </div>
                  <!-- Add more gallery items here -->
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
