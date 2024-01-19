
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
      <div class="col-xs-12 text-center">
        <address class="wow fadeInUp">
        <h3>MAIN OFFICE</h3>
        <!-- <h5>You are always welcome to stop by and say hello !</h5> -->
        <p>Second Floor, Upasana Building, Kowdiar Ave, opposite Income Tax Office, P.O, Kowdiar
          <br>
          Thiruvananthapuram, Kerala 695003</p>
        <p>PHONE:
          +91 6282721984 <BR>
          +91 8907634900
          </p>
        <a href="#">support [at] miscarchive.com</a>
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
      <!-- end col-12 --> 
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
