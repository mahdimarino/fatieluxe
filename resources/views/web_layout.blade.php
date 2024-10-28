<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FatieLuxe</title>
    <!-- Stylesheets -->
    <link href="{{asset('css/website/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/website/css/style.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{asset('css/website/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- Color File -->
    <link href="{{asset('css/website/css/color.css')}}" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600;700&family=DM+Sans:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="https://fatieluxe.com/css/website/images/logo-dark.png" type="image/x-icon">
    <link rel="icon" href="https://fatieluxe.com/css/website/images/logo-dark.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="left-column">
                            <ul class="contact-info">
                                <li><i class="flaticon-pin"></i>Night Market, Backside Of Mall of emirates</li>
                                <li><a href="mailto:info@company.com"><i class="flaticon-email"></i>style@fatieluxe.com</a>
                                </li>
                                <li><i class="flaticon-clock"></i>Mon - Sat 9:00 am to 6:00 pm</li>
                            </ul>
                        </div>
                        <div class="right-column">
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="left-column">
                            <!--Logo-->
                            <div class="logo-box">
                                <div class="logo"><a href="/"><img src="{{asset('css/website/images/logo-dark.png')}}"
                                            alt=""></a></div>
                            </div>
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img
                                        src="https://html.tonatheme.com/2022/tayler/assets/images/icons/icon-bar.png"
                                        alt="">
                                </div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation">
                                            <li><a href="{{route('index')}}">Home</a>
                                                {{-- <ul>
                                                    <li><a href="index.html">Home Page 01</a></li>
                                                    <li><a href="index-2.html">Home Page 02</a></li>
                                                </ul> --}}
                                            </li>
                                            <li><a href="{{route('about')}}">About</a></li>
                                            <li><a href="{{route('services')}}">Services</a>
                                                {{-- <ul>
                                                    <li><a href="services.html">Our Services</a>
                                                    </li>
                                                    <li><a href="outerwear.html">Outerwear</a></li>
                                                    <li><a href="suits-shirts.html">Suits & Shirts</a></li>
                                                    <li><a href="wedding-dresses.html">Wedding Dresses</a></li>
                                                    <li><a href="custom-work.html">Custom Work</a></li>
                                                    <li><a href="stylish-clothing.html">Stylish Clothing</a></li>
                                                    <li><a href="accessories.html">Accessories</a></li>
                                                </ul> --}}
                                            </li>
                                            {{-- <li><a href="/products">Products</a></li> --}}
                                            <li class="dropdown"><a href="/all">Products</a>
                                                <ul>
                                                    <li><a href="{{ route('all', 'clothing') }}">Clothing</a></li>
                                                    <li><a href="{{ route('all', 'bags') }}">Bags</a></li>
                                                    <li><a href="{{ route('all', 'perfume') }}">Perfume</a></li>
                                                    <li><a href="{{ route('all', 'accessories') }}">Accessories</a></li>
                                                </ul>
                                            </li> 
                                            {{-- <li class="dropdown"><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog </a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li> --}}
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="right-column">
                            <div class="navbar-right">
                                <div class="contact-info">
                                    <div class="icon"><i class="flaticon-phone-call"></i></div>
                                    <div class="content">
                                        <h5>Call Anytime</h5>
                                        <h4><a href="tel:+971502238132">+971 50 223 8132</a></h4>
                                    </div>
                                </div>
                                {{-- <button type="button" class="theme-btn search-toggler"><i
                                        class="flaticon-magnifying-glass"></i></button> --}}
                                <div class="link-btn"><a href="{{ route('contact') }}" class="theme-btn btn-style-two"><span>Reach to Us</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="header-upper">
                    <div class="auto-container">
                        <div class="inner-container">
                            <!--Logo-->
                            <div class="logo-box">
                                <div class="logo"><a href="{{route('index')}}"><img
                                            src="{{asset('css/website/images/logo-dark.png')}}" alt=""></a></div>
                            </div>
                            <div class="right-column">
                                <!--Nav Box-->
                                <div class="nav-outer">
                                    <!--Mobile Navigation Toggler-->
                                    <div class="mobile-nav-toggler"><img
                                            src="https://html.tonatheme.com/2022/tayler/assets/images/icons/icon-bar.png"
                                            alt="">
                                    </div>

                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-md navbar-light">
                                    </nav>
                                </div>
                                {{-- <div class="navbar-right">
                                    <button type="button" class="theme-btn search-toggler"><i
                                            class="flaticon-magnifying-glass"></i></button>
                                </div> --}}
                                <div class="link-btn"><a href="{{ route('contact') }}" class="theme-btn btn-style-two"><span>Reach to Us</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><i class="icon fal fa-times"></i></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-light.png" alt=""
                                title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

            <div class="nav-overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
        </header>
        <!-- End Main Header -->
        @yield('content')
        <footer class="main-footer"
            style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/background/bg-6.jpg);">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row">

                        <!--Column-->
                        <div class="column col-lg-5 col-md-12">
                            <div class="widget about-widget">
                                <div class="about-widget_text">
                                    Give us a call or text us on WhatsApp, <br> and we will reply shortly.
                                </div>
                                <div class="about-widget_phone"><a href="tel:+971502238132">+971 50 223 8132</a>
                                </div>
                                <ul class="about-widget_social-links">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-7 col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget links-widget">
                                        <h4 class="widget-title">Services</h4>
                                        <div class="widget-content">
                                            <ul>
                                              <li><a href="{{ route('all', 'clothing') }}">Clothing</a></li>
                                            <li><a href="{{ route('all', 'bags') }}">Bags</a></li>
                                            <li><a href="{{ route('all', 'perfume') }}">Perfume</a></li>
                                            <li><a href="{{ route('all', 'accessories') }}">Accessories</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget links-widget">
                                        <h4 class="widget-title">Links</h4>
                                        <div class="widget-content">
                                            <ul>
                                                <li><a href="{{route('index')}}">Home</a></li>
                                               <li><a href="{{route('about')}}">About</a></li>
                                                <li><a href="{{route('services')}}">Services</a>
                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="footer-border-bottom mb-40"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-widget_address-title">Visit our shop</div>
                                    <div class="contact-widget_address mb-40"> Night Market, Backside Of Mall of emirates</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-widget_mail-title">Send us email</div>
                                    <div class="contact-widget_mail mb-40"><a
                                            href="mailto:style@fatieluxe.com">style@fatieluxe.com</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            {{-- <div class="footer-bottom">
                <div class="auto-container">
                    <div class="copyright">© Copyright 2023 by Company.com</div>
                </div>
            </div> --}}
        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top"><a href="# " class="back-to-top " data-wow-duration="1.0s " data-wow-delay="1.0s "><i
                class="fa fa-angle-up "></i></a></div>

    <script src="{{ asset('css/website/js/jquery.js') }}"></script>
    <script src="{{ asset('css/website/js/popper.min.js') }}"></script>
    <script src="{{ asset('css/website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/website/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('css/website/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('css/website/js/isotope.js') }}"></script>
    <script src="{{ asset('css/website/js/owl.js') }}"></script>
    <script src="{{ asset('css/website/js/appear.js') }}"></script>
    <script src="{{ asset('css/website/js/wow.js') }}"></script>
    <script src="{{ asset('css/website/js/scrollbar.js') }}"></script>
    <script src="{{ asset('css/website/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('css/website/js/swiper.min.js') }}"></script>
    <script src="{{ asset('css/website/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('css/website/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('css/website/js/script.js') }}"></script>


</body>

</html>