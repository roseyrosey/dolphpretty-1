<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DolphPretty') }}</title>

    <!-- Styles -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" >
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }} " >
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:300,400,700') }}">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-select/css/bootstrap-select.min.css') }}">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.css')}} ">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.css') }}" >
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href=" {{ asset('img/apple-touch-icon.png') }}" >
   {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="all">


  <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Contact +237 697718256 / contact@dolphpretty.com</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                @guest
                <div class="login">
                    <a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">CONNEXION</span></a><a href="{{ route('register') }}" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span></a>
                </div>

                @else
                    <div class="login">
                  <a href="{{route('profile.show',Auth::user()->id)}}">
                  <span class="d-none d-md-inline-block">
                     {{ Auth::user()->name }}
                 </span>
                  </a>
               <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>  
                    </div>
                @endguest
              
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="https://www.facebook.com/dolfpretty"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="https://www.linkedin.com/company/dolphpretty/"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="https://twitter.com/dolphpretty"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
        <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                         <hr>
                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <a href="{{ url('/auth/github') }}" class="btn btn-github"><i class="fa fa-github"></i> Github</a>
                                    <a href="{{ url('/auth/twitter') }}" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                                    <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                                </div>
                            </div>
                    </form>
              <p class="text-center text-muted">Pas encore inscrit ?</p>
              <p class="text-center text-muted"><a href="customer-register.html"><strong>S'inscrivez-vous maintemant</strong></a>! et profitez des rabais spéciaux et bien plus encore!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="{{ url('/')}}" class="navbar-brand home"><img src="{{ asset('img/logo.png')}}" alt="Universal logo" class="d-none d-md-inline-block"><img src="{{ asset('img/logo-small.png')}}" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown active"><a href=" {{url('/')}} ">Accueil</a>
                </li>
                <li class="nav-item dropdown menu-large"><a href="{{route('prestataires.index')}}">Nos prestataires</a>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#">PRETTY-SHOP </a>
                </li>
                <!-- ========== FULL WIDTH MEGAMENU END ==================-->
                <!-- ========== Contact dropdown ==================-->
                <li class="nav-item dropdown"><a href="">Contact </a>
                </li>
                <!-- ========== Contact dropdown end ==================-->
              </ul>
            </div>
            <div id="search" class="collapse clearfix">
              <form role="search" class="navbar-form">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End-->
      
        @yield('content')

        
    </div>


 <!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="h6">About Us</h4>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <hr class="d-block d-lg-none">
            </div>
           
            <div class="col-md-3 col-sm-8">
                    <h4>Contact</h4>

                    <p><strong>contact@dolphpretty.com</strong>
                        <br>Cameroun: +237 697718256
                        
                    </p>
                </div>
            <div class="col-lg-3">
                       <p><br>Canada: +1(438)722-1440
                            <br>Cote d'ivoire: +224 57971825
                        <br>France: +33 613202181</p>
              <hr class="d-block d-lg-none">
            </div>
          </div>
        </div>
         <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2018. Dolphpretty </p>
                    <p class="pull-right">Design by  <a href="https://dolphgroup.com"> Dolphgroup </a> 
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>

                </div>
            </div>
        </div>
      </footer>


    </div>
       <!-- Javascript files-->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ asset('vendor/waypoints/lib/jquery.waypoints.min.js')}}"> </script>
    <script src="{{ asset('vendor/jquery.counterup/jquery.counterup.min.js')}}"> </script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{ asset('js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('vendor/jquery.scrollto/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset('js/front.js')}}"></script>
    <!-- Scripts -->
  
</body>
</html>
