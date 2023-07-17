<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MISCARCHIVE | IT Digital Marketing Agency</title>
<meta name="author" content="Miscarchive">
<meta name="description" content="MISCARCHIVE| IT Digital Agency">
<meta name="keywords" content="html, template, carousel, theme, themezinho, agency, html5">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="MISCARCHIVE| IT Digital Agency">
<meta property="og:image" content="">
<meta property="og:site_name" content="MISCARCHIVE">
<meta property="og:title" content="MISCARCHIVE">
<meta property="og:type" content="website">
<meta property="og:url" content="">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@SREATIVE">
<meta name="twitter:creator" content="@SREATIVE">
<meta name="twitter:title" content="SREATIVE">
<meta name="twitter:description" content="SREATIVE | Digital Agency">
<meta name="twitter:image" content="http://www.themezinho.net/sreative/preview.png">

<!-- FAVICON FILES -->
<link href="" rel="apple-touch-icon-precomposed" sizes="144x144">
<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
<link href="ico/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset("assets/css/jquery.fancybox.css")}}" media="screen" rel="stylesheet" type="text/css" />
<link href="{{ asset("assets/css/settings.css")}}" rel="stylesheet">
<link href="{{ asset("assets/css/ionicons.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/style.css")}}" rel="stylesheet">

<!-- ...Existing code... -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KCWBVHW');</script>
<!-- End Google Tag Manager -->
  
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10996226465"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10996226465');
</script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="loading yellow-bg">
  <div class="table">
    <div class="inner"> <img src="{{ asset('assets/images/LOAD01.webp') }}" alt="Image">
      <div class="clearfix"></div>
      <div class="spinner"></div>
    </div>
    <!-- end inner -->
  </div>
  <!-- end table -->
</div>
<!-- end loading -->
<div class="transition-overlay yellow-bg"></div>
<!-- end transition-overlay -->
<div class="side-menu" id="enquiry"> <span class="side-menu-close"><i class="ion-android-close"></i></span>
  <h4>Enquiry Form</h4>
  <form action="{{route('enquiry')}}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="NAME" required>
    <input type="text" name="email" id="email" placeholder="E-MAIL ADDRESS" required>
    <input type="text" name="phone" id="phone" placeholder="PHONE" required>
    
    <select type="" name="service" class="form-control" id="service">
      <option value="">Select Service</option>
      <option value="Digital marketing">Digital marketing</option>
      <option value="SMM">Social Media Handling</option>
      <option value="WEB DEVELOPMENT">Web development</option>
      <option value="APPLICATION DEVELOPMENT">Application Development</option>
      <option value="BRAND BUILDING">Brand Building</option>
      <option value="Audiable">Audiable</option>

    </select>
    <br>
    <textarea name="message" id="message" placeholder="YOUR MESSAGE" required></textarea>
    <button id="submit" type="submit" name="submit">SEND MESSAGE</button>
  </form>
   <div id="success" class="alert alert-success" role="alert">
          <p>Your message was sent successfully! We will be in touch as soon as we can.</p>
        </div>
        <!-- end success -->
        <div id="error" class="alert alert-danger" role="alert">
          <p>Something went wrong, try refreshing and submitting the form again.</p>
        </div>
        <!-- end error -->
  <ul>
    <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
    <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
    <li class="googleplus"><a href="#"><i class="ion-social-googleplus"></i></a></li>
    <li class="instagram"><a href="#"><i class="ion-social-instagram"></i></a></li>
    <li class="pinterest"><a href="#"><i class="ion-social-pinterest"></i></a></li>
    <li class="youtube"><a href="#"><i class="ion-social-youtube"></i></a></li>
  </ul>
</div>
<div class="transition-overlay yellow-bg"></div>

<!-- end side-menu -->

<!-- Button trigger modal -->

<!-- Button trigger modal -->


