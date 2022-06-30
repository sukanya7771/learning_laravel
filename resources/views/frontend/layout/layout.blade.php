<html lang="en">
<head>
  <title>@yield('page_title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!---font-awesome-->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">


   <!---own css-->
   <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/stylesheet.css')}}">
   <link rel="stylesheet" href="{{asset('front_assets/css/responsive.css')}}">

   <style>
       .field_error{
        color: red;
        font-weight: 20px;
       } 
   </style>
  
</head>
<body>

<!-- header -->
<header class="fixed-top">
    <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand text-white" href="{{url('/')}}">Oyzer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mr-md-2">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">General Home Service</a>
                <ul class="dropdown-menu">
                  <a class="dropdown-item" href="#">A</a>
                  <a class="dropdown-item" href="#">b</a>
                </ul>
              </li>
            </ul>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Category
            </a>
            <div class="dropdown-menu menu-scrool" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Electrician</a>
              <a class="dropdown-item" href="#">Plumber</a>
              <a class="dropdown-item" href="#">Carpenter</a>
              <a class="dropdown-item" href="#">Painter</a>
              <a class="dropdown-item" href="#">Mason</a>
              <a class="dropdown-item" href="#">Aluminium door worker</a>
              <a class="dropdown-item" href="#">Welder & fabricator</a>
              <a class="dropdown-item" href="#">Distilled water supply</a>
              <a class="dropdown-item" href="#">Security Guard</a>
              <a class="dropdown-item" href="#">Tailor Service</a>
              <a class="dropdown-item" href="#">Packer & Movers</a>
              <a class="dropdown-item" href="#">Gardener</a>
              <a class="dropdown-item" href="#">House keeping</a>
              <a class="dropdown-item" href="#">Medicine delivery</a>
              <a class="dropdown-item" href="#">A.C. repair</a>
              <a class="dropdown-item" href="#">Washing machine</a>
              <a class="dropdown-item" href="#">TV</a>
              <a class="dropdown-item" href="#">Gyser</a>
              <a class="dropdown-item" href="#">Refrigerator</a>
              <a class="dropdown-item" href="#">Inverter</a>
              <a class="dropdown-item" href="#">Microwave</a>
              <a class="dropdown-item" href="#">Water purifier</a>
              <a class="dropdown-item" href="#">Borewell water pump</a>
              <a class="dropdown-item" href="#"> DTH</a>
              <a class="dropdown-item" href="#">Solar heater</a>
              <a class="dropdown-item" href="#">Computer/Lepatop</a>
              <a class="dropdown-item" href="#">Mobile</a>
              <a class="dropdown-item" href="#">Printer</a>
              <a class="dropdown-item" href="#">CCTV</a>
              <a class="dropdown-item" href="#">Xerox</a>
              <a class="dropdown-item" href="#">Water cooler</a>
              <a class="dropdown-item" href="#">Deep freezer</a>
              <a class="dropdown-item" href="#">Civil engineer</a>
              <a class="dropdown-item" href="#">Architect</a>
              <a class="dropdown-item" href="#">Contractor</a>
              <a class="dropdown-item" href="#">Interior designer</a>
              <a class="dropdown-item" href="#">False ceiling</a>
              <a class="dropdown-item" href="#">Water purifier</a>
              <a class="dropdown-item" href="#">PVC</a>
              <a class="dropdown-item" href="#">POP</a>
              <a class="dropdown-item" href="#">Car repair</a>
              <a class="dropdown-item" href="#">Bike repair</a>
              <a class="dropdown-item" href="#">Breakdown Service</a>
              <a class="dropdown-item" href="#">Car wash</a>
              <a class="dropdown-item" href="#">Car renting</a>
              <a class="dropdown-item" href="#">C.A. (business)</a>
              <a class="dropdown-item" href="#">C.A. (I.T. Filling)</a>
              <a class="dropdown-item" href="#">Visa service</a>
              <a class="dropdown-item" href="#">GST</a>
              <a class="dropdown-item" href="#">Lawyer</a>
              <a class="dropdown-item" href="#">Pan card service</a>
              <a class="dropdown-item" href="#">Notary</a>
              <a class="dropdown-item" href="#">Passport</a>
              <a class="dropdown-item" href="#">Home cleaning</a>
              <a class="dropdown-item" href="#">Bathroom cleaning</a>
              <a class="dropdown-item" href="#">Kitchen cleaning</a>
              <a class="dropdown-item" href="#">Sofa cleaning</a>
              <a class="dropdown-item" href="#">Carpet cleaning</a>
              <a class="dropdown-item" href="#">Window/glass cleaning</a>
              <a class="dropdown-item" href="#">Office cleaning</a>
              <a class="dropdown-item" href="#">Pest control</a>
              <a class="dropdown-item" href="#">Sewage cleaning</a>
              <a class="dropdown-item" href="#">Water tank cleaning</a>
              <a class="dropdown-item" href="#"> Laundry service</a>
              <a class="dropdown-item" href="#">Health & Fitness</a>
              <a class="dropdown-item" href="#">Dietician</a>
              <a class="dropdown-item" href="#">Nutritionist</a>
              <a class="dropdown-item" href="#">Yoga trainer</a>
              <a class="dropdown-item" href="#">Nurse</a>
              <a class="dropdown-item" href="#">Beauty & salon</a>
              <a class="dropdown-item" href="#">Bridal make-up</a>
              <a class="dropdown-item" href="#">Facial</a>
              <a class="dropdown-item" href="#">Threading</a>
              <a class="dropdown-item" href="#">Pedicure/manicure</a>
              <a class="dropdown-item" href="#">Mehendi artists</a>
              <a class="dropdown-item" href="#">Wedding photography</a>
              <a class="dropdown-item" href="#">Pre-wedding photography</a>
              <a class="dropdown-item" href="#">Events photography</a>
              <a class="dropdown-item" href="#">Baby photography</a>
              <a class="dropdown-item" href="#">Maternity photography</a>
              <a class="dropdown-item" href="#">Product shoot</a>
              <a class="dropdown-item" href="#">DJ/music party shoot</a>
              <a class="dropdown-item" href="#">Birthday event</a>
              <a class="dropdown-item" href="#">Wedding event</a>
              <a class="dropdown-item" href="#"> Engagement event</a>
              <a class="dropdown-item" href="#">Reception event</a>
              <a class="dropdown-item" href="#">Baby shower event</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/registration')}}"><b>Register as a Professional</b></a>
          </li>
      </ul>
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
      <div class="proff">
          <ul>
              <!-- <li><a href="#" class="btn btn-danger">Register as a Professional</a></li> -->
              <li><a href="{{url('/login')}}" class="btn login-btn">Login</a></li>
          </ul>
      </div>
    </div>
    </div>
</nav>
  <!--/.Navbar-->
</header>
<div class="right_col" role="main">
                     <div class="">
                      @section('container')
                      @show
                     </div>
                    </div>
<!-- banner -->
<!--<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-text">
                    <h1>Reference site about Lorem Ipsum</h1>
                </div>
            </div>
        </div>
    </div>
</div>-->

<!-- category -->

<!--<section class="mt-4 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="cat-bg">
                    <div class="cat-pic">
                        <img src="img/dev.png" alt="" class="img-fluid">
                    </div>
                    <div class="cat-text">
                        <a href="#">General Home Service</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cat-bg">
                    <div class="cat-pic">
                        <img src="img/dev.png" alt="" class="img-fluid">
                    </div>
                    <div class="cat-text">
                        <a href="#">Appliance repair service</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cat-bg">
                    <div class="cat-pic">
                        <img src="img/dev.png" alt="" class="img-fluid">
                    </div>
                    <div class="cat-text">
                        <a href="#">Construction</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cat-bg">
                    <div class="cat-pic">
                        <img src="img/dev.png" alt="" class="img-fluid">
                    </div>
                    <div class="cat-text">
                        <a href="#">Vehicle</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cat-bg">
                    <div class="cat-pic">
                        <img src="img/dev.png" alt="" class="img-fluid">
                    </div>
                    <div class="cat-text">
                        <a href="#">Documentation</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cat-bg">
                    <div class="cat-pic">
                        <img src="img/dev.png" alt="" class="img-fluid">
                    </div>
                    <div class="cat-text">
                        <a href="#">Cleaning</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-primary">View All Services</a>
            </div>
        </div>
    </div>
</section>-->


<!-- footer -->
<section class="footer-section info-active">
   <div class="map light"></div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-widget">
                        <a class="logo" href="index.html">
                            <img src="img/logo-light.png" alt="logo">
                        </a>
                        <p>Financial experts support or help you to to find out which way you can raise your funds more.</p>
                        <div class="booking-wrap">
                            <div><svg height="448pt" viewBox="0 -5 448 447" width="448pt" xmlns="http://www.w3.org/2000/svg"><path d="m448 264.5v-264h-368v56h296c4.417969 0 8 3.582031 8 8v200zm0 0"></path><path d="m178.34375 338.84375c1.5-1.5 3.535156-2.34375 5.65625-2.34375h184v-264h-368v264h72c4.417969 0 8 3.582031 8 8v92.6875zm0 0"></path></svg></div>
                            <div class="booking-wrap-inner">
                                <h3>Need Free Consultation?</h3>
                                <a href="contact.html">Book Schedule</a>
                            </div>
                        </div>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-widget link-widget">
                        <h3>Information</h3>
                        <ul class="widget-links">
                            <li><i class="fas fa-square-full"></i><a href="#">Business Strategy</a></li>
                            <li><i class="fas fa-square-full"></i><a href="#">Customer Experience</a></li>
                            <li><i class="fas fa-square-full"></i><a href="#">Partnership System</a></li>
                            <li><i class="fas fa-square-full"></i><a href="#">Terms &amp; Condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-widget link-widget">
                        <h3>Information</h3>
                        <ul class="widget-links">
                            <li><i class="fas fa-square-full"></i><a href="#">Business Strategy</a></li>
                            <li><i class="fas fa-square-full"></i><a href="#">Customer Experience</a></li>
                            <li><i class="fas fa-square-full"></i><a href="#">Partnership System</a></li>
                            <li><i class="fas fa-square-full"></i><a href="#">Terms &amp; Condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-widget">
                        <h3>Newsletter Signup</h3>
                        <p>Signup today for hints, tips and the latest news and updates.</p>
                        <div class="subscribe-form">
                            <form action="#" class="subscribe-form">
                                <input class="form-control" type="email" name="email" placeholder="Email *" required="">
                                <input type="hidden" name="action" value="mailchimpsubscribe">
                                <button class="submit">Subscribe<i class="fa fa-paper-plane"></i></button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright-wrap">
                <p>© <span id="currentYear"></span> ThemeEaster All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section><!--/. footer-section -->


















<!-- bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- owl carausel js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="{{asset('front_assets/js/main.js')}}"></script>
</body>
</html>