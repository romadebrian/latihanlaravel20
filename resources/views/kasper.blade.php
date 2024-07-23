<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title>Kasper One Page Template</title>
        
        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
		
        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{ asset('kasper/css/font-awesome.min.css') }}">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('kasper/css/bootstrap.min.css') }}">
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{ asset('kasper/css/jquery.fancybox.css') }}">
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('kasper/css/owl.carousel.css') }}">
        <!-- Animate -->
        <link rel="stylesheet" href="{{ asset('kasper/css/animate.css') }}">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ asset('kasper/css/main.css') }}">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="{{ asset('kasper/css/responsive.css') }}">
		
		
		<!-- Modernizer Script for old Browsers -->
        <script src="{{ asset('kasper/js/vendor/modernizr-2.6.2.min.js') }} "></script>
		
    </head>
	
    <body>

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a href="#body">
                            <img src="img/logo.png" alt="Kasper Logo">
                        </a>
                    </h1>
                    <!-- /logo -->

                    </div>

                    <!-- main nav -->
                    <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                        <ul id="nav" class="nav navbar-nav">
                            <li class="current"><a href="#home">Home</a></li>
                            <li><a href="#service">Service</a></li>
                            <li><a href="#portfolio">portfolio</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- /main nav -->
                </div>

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->


        @yield('kaspermain')

        <!--
        #footer
        ========================== -->
        <footer id="footer" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="footer-logo wow fadeInDown">
                            <img src="img/logo.png" alt="logo">
                        </div>

                        <div class="footer-social wow fadeInUp">
                            <h3>We are social</h3>
                            <ul class="text-center list-inline">
                                <li><a href="http://goo.gl/RqhEjP"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="http://goo.gl/hUfpSB"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="http://goo.gl/r4xzR4"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href="http://goo.gl/k9zAy5"><i class="fa fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>

                        <div class="copyright">
                           
                            <p>Theme by <a href="http://graphberry.com">GraphBerry.com</a> Developed by <a target="_blank" href="http://www.themefisher.com">Themefisher</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!--
        End #footer
        ========================== -->


        <!--
        JavaScripts
        ========================== -->
        
        <!-- main jQuery -->
        <script src="{{ asset('js/vendor/jquery-1.11.1.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- jquery.nav -->
        <script src="{{ asset('js/jquery.nav.js') }}"></script>
        <!-- Portfolio Filtering -->
        <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
        <!-- Fancybox -->
        <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
        <!-- Parallax sections -->
        <script src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
        <!-- jQuery Appear -->
        <script src="{{ asset('js/jquery.appear.js') }}"></script>
        <!-- countTo -->
        <script src="{{ asset('js/jquery-countTo.js') }}"></script>
        <!-- owl carousel -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- WOW script -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- theme custom scripts -->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
