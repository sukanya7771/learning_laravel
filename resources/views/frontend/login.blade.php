<html lang="en">
<head>
  <title>{{@config('constants.site_name')}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!---font-awesome-->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

   <!---own css-->
   <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/stylesheet.css')}}">
   <link rel="stylesheet" href="{{asset('front_assets/css/responsive.css')}}">
  
</head>
<body>

<section class="" style="background-image: url({{asset('front_assets/img/login-bg-pic.png')}}); width: 100%;">
    <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" name="" class="form-control input_user" value="" placeholder="username">
            </div>
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-key"></i></span>
              </div>
              <input type="password" name="" class="form-control input_pass" value="" placeholder="password">
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customControlInline">
                <label class="custom-control-label" for="customControlInline">Remember me</label>
              </div>
            </div>
              <div class="d-flex justify-content-center mt-3 login_container">
          <button type="button" name="button" class="btn login_btn">Login</button>
           </div>
          </form>
        </div>
    
        <div class="mt-4">
          <div class="d-flex justify-content-center links">
            Don't have an account? <a href="#" class="ml-2">Sign Up</a>
          </div>
          <div class="d-flex justify-content-center links">
            <a href="#">Forgot your password?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>