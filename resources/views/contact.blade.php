
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="title">CONTACT</h2>
        <h5 class="sub-title">Just say hi! You are always welcome</h5>
      </div>
    </div>
  </div>
</header>
<section class="contact-info">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 text-center">
        <address class="wow fadeInUp">
        <h3>Get in Touch With Us</h3>
        <!-- <h5>You are always welcome to stop by and say hello !</h5> -->
        <p>Gautham villa 
          T.c 7/82
          Kanjirampara po
          Kanjirampara 
          <br>
          Thiruvananthapuram, Kerala 695030</p>
        <p>PHONE: &nbsp; <a href="tel:+916282721984">+91 6282721984</a> , &nbsp; &nbsp; <a href="tel:+91 8907634900"> +91 8907634900</a>
        </p>

        <a href="#">support@miscarchive.com</a>
        </address>
        <form  action="{{route('contactform')}}" method="post" class="wow fadeInUp">
          @csrf
          <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Your name" class="spacing" required>
            <input type="text" name="email" id="email" placeholder="E-mail" required>
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <input type="text" name="phone" id="phone" placeholder="phone" class="spacing" required>
            <input type="text" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <textarea name="message" id="message" placeholder="Your message" required></textarea>
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <button id="submit" type="submit" name="submit">SUBMIT</button>
          </div>
          <!-- end form-group -->
        </form>
        <div id="success2" class="alert alert-success" role="alert">
          <p>Your message was sent successfully! We will be in touch as soon as we can.</p>
        </div>
        <!-- end success -->
        <div id="error2" class="alert alert-danger" role="alert">
          <p>Something went wrong, try refreshing and submitting the form again.</p>
        </div>
        <!-- end error --> 
      </div>
      <!-- end col-6 --> 

      <div class="col-xs-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.817829742477!2d76.9749134744944!3d8.517061096793476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05bb3682df7b0b%3A0x883771e7a4c3fd4f!2sMisc%20Archive!5e0!3m2!1sen!2sin!4v1751711918093!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>


    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end contact-info -->
<section class="map wow fadeInUp" id="map"> </section>
<!-- end map -->
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
