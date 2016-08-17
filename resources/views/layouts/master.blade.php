<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Bible Mastery Bible quiz</title>

    <meta name="description" content="ProUI Frontend is a Responsive Bootstrap Site Template created by pixelcave and added as a bonus in ProUI Admin Template package which is published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('img/icon57.png')}}" sizes="57x57">
    <link rel="apple-touch-icon" href="{{asset('img/icon72.png')}}" sizes="72x72">
    <link rel="apple-touch-icon" href="{{asset('img/icon76.png')}}" sizes="76x76">
    <link rel="apple-touch-icon" href="{{asset('img/icon114.png')}}" sizes="114x114">
    <link rel="apple-touch-icon" href="{{asset('img/icon120.png')}}" sizes="120x120">
    <link rel="apple-touch-icon" href="{{asset('img/icon144.png')}}" sizes="144x144">
    <link rel="apple-touch-icon" href="{{asset('img/icon152.png')}}" sizes="152x152">
    <link rel="apple-touch-icon" href="{{asset('img/icon180.png')}}" sizes="180x180">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{asset('css/themes.css')}}">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) & Respond.js (enables responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="{{asset('js/vendor/modernizr-respond.min.js')}}"></script>
    
</head>
<body>
<!-- Page Container -->
<!-- In the PHP version you can set the following options from inc/config file -->
<!-- 'boxed' class for a boxed layout -->
<div id="page-container">
    <!-- Site Header -->
    <header>
        <div class="container">
            <!-- Site Logo -->
            <a href="index.html" class="site-logo">
                <i class="gi gi-flash"></i> <strong>Bible</strong>Mastery
            </a>
            <!-- Site Logo -->

            <!-- Site Navigation -->
            <nav>
                <!-- Menu Toggle -->
                <!-- Toggles menu on small screens -->
                <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- END Menu Toggle -->

                <!-- Main Menu -->
                <ul class="site-nav">
                    <!-- Toggles menu on small screens -->
                    <li class="visible-xs visible-sm">
                        <a href="javascript:void(0)" class="site-menu-toggle text-center">
                            <i class="fa fa-times"></i>
                        </a>
                    </li>
                    <!-- END Menu Toggle -->
                    <li class="active">
                        <a href="{{ action('HomeController@getIndex') }}"></i>Home</a>
                       <!--i Remove here -->
                       
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="site-nav-sub"><i class="fa fa-angle-down site-nav-arrow"></i>Pages</a>
                        <ul>
                            <li>
								<!--i Remove here -->
                                
                                <a href="{{ route('quiz') }}">Quiz</a>
                            </li>
                            <li>
                                <a href="{{ route('howitwork') }}">How it works</a>
                            </li>
                            <li>
                                <a href="{{ route('engage') }}">How to engage</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="{{ route('features') }}">Features</a>
                    </li>
                    <li>
                        <a href="{{ route('pricing') }}">Pricing</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{ action('HomeController@getAbout') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="btn btn-primary">Log In</a>
                    </li>
                    <li>
                        <a href="{{ route('signup') }}" class="btn btn-success">Sign Up</a>
                    </li>
                </ul>
                <!-- END Main Menu -->
            </nav>
            <!-- END Site Navigation -->
        </div>
    </header>
    <!-- END Site Header -->
@yield('content')


@yield('footer')
    <!-- Footer -->
    <footer class="site-footer site-section">
        <div class="container">
            <!-- Footer Links -->
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h4 class="footer-heading">About Us</h4>
                    <ul class="footer-nav list-inline">
                        <li><a href="">Company</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('contact') }}">Support</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="footer-heading">Legal</h4>
                    <ul class="footer-nav list-inline">
                        <li><a href="javascript:void(0)">Licensing</a></li>
                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="footer-heading">Follow Us</h4>
                    <ul class="footer-nav footer-nav-social list-inline">
                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="footer-heading"><span id="year-copy">2016</span> &copy; <a href="http://goo.gl/TDOSuC">Bible Mastery</a></h4>
                    <ul class="footer-nav list-inline">
                        <li>Designed <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I">Infinitypaul</a></li>
                    </ul>
                </div>
            </div>
            <!-- END Footer Links -->
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>

<!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
<script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

 <!-- Load and execute javascript code used only in this page -->
           <script src="{{asset('js/pages/login.js')}}"></script>
        <script>$(function(){ Login.init(); });</script>
        
          <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/signup.js"></script>
        <script>$(function(){ Signup.init(); });</script>
</body>
</html>