<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('images/fav_icon.png') }}" rel="shortcut icon">
  <title>Symphony - Smart Student Management System</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" media="screen,projection"/>
  <link href="{{ asset('css/custom_css.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Raleway|Roboto" rel="stylesheet" />
  <!--@import url('https://fonts.googleapis.com/css?family=Josefin+Slab|Raleway|Roboto');-->


  <style>
  body {
    max-width: 100%;
    overflow-x: hidden;
  }

  html,
  body {
    height: 100%;
    margin: 0;
  }
  .margin-fix {
    margin-bottom: -20px;
  }
  </style>
</head>

<body>
  <ul id="slide-out" class="sidenav">
    <li><a class="waves-effect" href="https://studentservice.herokuapp.com/"><i class="material-icons">home</i>Symphony Student Service</a></li>
    <li><a class="waves-effect" href="{{ route('login') }}"><i class="material-icons">filter_vintage</i>Get Started Now</a></li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a class="waves-effect" href="https://studentservice.herokuapp.com"><i class="material-icons">book</i>About us</a></li>
  </ul>
  <nav class="transparent navbar-fixed-top" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="https://studentservice.herokuapp.com" class="brand-logo"><img src="images/fav_icon.png" style="height: 135px; width:135px;" /><span class="head-banner-text" style="color: red; padding-left: 10px;">Symphony</span></a>
      <ul class="right hide-on-med-and-down">
        @if (Route::has('login'))
        <li>
          @auth
          <a href="{{ url('/home') }}">{{ Auth::user()->name }}'s Dashboard</a>
          @else
          <a href="{{ route('login') }}">Login</a>
        </li>
        <li>
          @if (Route::has('register'))
          <a href="{{ route('register') }}">Register</a>
        </li>
        @endif
        @endauth
      </ul>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
    @endif
    <!--<div class="flex-center position-ref full-height">
      @if (Route::has('login'))
      <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
      </div>
      @endif
    -->
    </nav>
    <div class="row parallax-window pad pad-down" style="margin-bottom: 0px; margin-right: 0px; margin-left: 0px;" data-parallax="scroll" data-image-src="images/1123.png">
      <div class="col-md-12 col-sm-12 text-center">
        <h1 class="head-banner-text red-text text-accent-3 small-pad" style="font-weight: 400;" >Symphony | Smart Student Management System.</h1>
        <h5 class="col s12 light  indigo-text text-accent-4 banner-text">Symphony is a smart student content management system where student can login to get daily homeworks,<br /> check their attendance and more with just few clicks. Drop us a mail to know more.
        </h5>
      </div>
      <div class="col-md-12 col-sm-12 text-center padmini">
        <a href="{{ route('login') }}" id="download-button" class="btn-large waves-effect waves-light amber darken-3">Get Started Now</a>
      </div>
      <br><br>
    </div>
    <div class="footpad purple lighten-1 margin-fix">
      <div class="col-md-12 col-sm-12 text-center">
        <p style="color: white;">&copy; Symphony 2019 &middot; Made with <i class="fa fa-heart fa-pad" style="color: red" aria-hidden="true"></i>&comma; <i class="fa fa-coffee fa-pad" style="color: brown" aria-hidden="true"></i> and <i class="fa fa-code fa-pad" style="color: black" aria-hidden="true"></i> &middot; View source <a href="#"> here</a></p>
      </div>
    </div>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
    <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
  </body>
  </html>
  <!--
  html, body {
  background-color: #fff;
  color: #636b6f;
  font-family: 'Nunito', sans-serif;
  font-weight: 200;
  height: 100vh;
  margin: 0;
}

.full-height {
height: 100vh;
}

.flex-center {
align-items: center;
display: flex;
justify-content: center;
}

.position-ref {
position: relative;
}

.top-right {
position: absolute;
right: 10px;
top: 18px;
}

.content {
text-align: center;
}

.title {
font-size: 84px;
}

.links > a {
color: #636b6f;
padding: 0 25px;
font-size: 13px;
font-weight: 600;
letter-spacing: .1rem;
text-decoration: none;
text-transform: uppercase;
}

.m-b-md {
margin-bottom: 30px;
}
</style>
-->
