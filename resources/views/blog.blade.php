
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
      <div class="col-md-8 col-md-offset-2 wow fadeInUp">
        <div class="blog-post">
          <figure><img src="{{asset('assets/images/blogs/RPA.png')}}" alt="Image"></figure>
          <h3>So what are Ai and RPA?</h3>
          <small>14TH OF MARCH</small> <span class="border"></span>
          <p>In the present world, RPA and AI are becoming more and more significant. They can assist businesses in automating routine processes to boost productivity and cut costs. Data input, customer support, and accounting are a few examples of high-volume, low-complexity operations that can be automated with RPA. Contrarily, more difficult jobs like natural language processing, image identification, and predictive analytics can be performed using artificial intelligence (AI). AI may be used to create intelligent robots and systems that can work independently and learn from their experiences. RPA and AI are transforming the way work is done and helping organizations stay competitive in a rapidly changing digital landscape.</p>
          <a href="{{route('ai-rpa')}}" class="link">READ MORE</a> </div>
        <!-- end blog-post -->
        <div class="blog-post">
          <figure><img src="{{asset('assets/images/blogs/PPC.png')}}" alt="Image"></figure>
          <h3>Pay Per Clicks in 2023</h3>
          <small>14TH OF MARCH</small> <span class="border"></span>
          <p>Misc Archive is a digital marketing agency in Trivandrum that specialises in providing cheap and high-quality digital marketing services to all kinds of businesses. We work with businesses of all sizes to develop customised digital marketing solutions that help them reach their goals. Our team of experts is always looking for ways to get your business in front of the right people and drive traffic to your website. One of the ways we do this is by setting up a Pay Per Click (PPC) campaign using Google Ads. Pay Per Click (PPC) campaigns using Google Ads are one of the most powerful tools available for quickly getting your business in front of potential customers.</p>
          <a href="{{route('ppc')}}" class="link">READ MORE</a> </div>
        <!-- end blog-post -->
        <div class="blog-post">
          <figure><img src="{{asset('assets/images/blogs/smo.jpg')}}" alt="Image"></figure>
          <h3>Search Engine Optimisation</h3>
          <small>14TH OF DECEMBER</small> <span class="border"></span>
          <p>Search Engine Optimization, or SEO for short, is the practice of optimizing a website or online content to increase its visibility and ranking in search engine results pages (SERPs). With more and more businesses establishing an online presence, the competition to rank higher in search engines is becoming increasingly fierce. Therefore, it is crucial for businesses to invest in SEO in order to drive traffic to their website, increase conversions, and stay ahead of their competitors.</p>
          <a href="{{route('seo')}}" class="link">READ MORE</a> </div>
        <!-- end blog-post -->
        <div class="blog-post">
          <figure><img src="{{asset('assets/images/blogs/smm.jpg')}}" alt="Image"></figure>
          <h3>Why do Social Media Marketing ?</h3>
          <small>14TH OF DECEMBER</small> <span class="border"></span>
          <p>In the past, advertising campaigns were limited to radio, TV, and print ads. However, as time passed, marketing trends changed as well.

            With almost all consumers using social media nowadays, it's essential for every business to have a very structured and active social media presence. Social media has a big influence on a consumer's purchasing decisions these days. The better the brand's social media presence, the more consumers trust them. Therefore, it is essential for every business to ensure that its social media presence is well-structured and active.
            </p>
          <a href="{{route('smm')}}" class="link">READ MORE</a> </div>

        <!-- end blog-post --> 
        
      </div>
      <!-- end col-8 -->
   
      
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
