<!doctype html>
<html lang="en">
  <head>
    <title>STRIKE OVER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/template/fonts/icomoon/style.css')}}">
    <link href="{{asset('/dist/css/bootstrap.css')}}" rel="stylesheet">
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <link href="{{asset('/dist/css/freelancer.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/template/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('/template/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/template/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('/template/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/template/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/template/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/template/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('/template/css/style.css')}}">

    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <!--humburger toggle-->
  <div class="site-wrap"  id="home-section">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <!-- navbar -->
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="/" class="text-black"><span class="text-primary">STRIKE OVER</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/question" class="nav-link">Pertanyaan</a></li>
                <li><a href="/tag" class="nav-link">Tags</a></li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item ">
                        <a class="nav-link">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item ">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
              </ul>
              </nav>
            </div>

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
    </header>
    <!-- end navbar -->
