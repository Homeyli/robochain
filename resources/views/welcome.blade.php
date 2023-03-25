
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>Landrick - Saas & Software Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Stackteam" />
        <meta name="email" content="stackteam.official@gmail.com" />
        <meta name="website" content="https://robochain.info" />
        <meta name="Version" content="v1.0.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="{{ asset('assets/fonts/yekan/font.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- tobii css -->
        <link href="{{ asset('assets/css/tobii.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- Slider -->               
        <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}"/> 
        <!-- Animation -->
        <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet" type="text/css" />
        <!-- Main Css -->
        <link href="{{ asset('assets/css/style-rtl.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet" id="color-opt">
    </head>

    <body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="20">
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">                 
                <div class="buy-button">
                    <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-outline-primary rounded">{{ __('landing.sale') }}</a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-left" id="navmenu-nav">
                        <li class="has-submenu">
                            <div class="card border-0 bg-transparent">
                                <div class="card-body p-0">
                                    <div class="contact-detail d-flex align-items-center mt-3" data-aos="fade-up" data-aos-duration="1400">
                                        <div class="icon">
                                            <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                                        </div>
                                        <div class="content overflow-hidden d-block">
                                            <h6 class="fw-bold mb-0">Robochain.info | روبوچین</h6>
                                            <a href="tel:+989120186223" class="text-primary">09120186223</a>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
        
        
        <x-hero></x-hero>
        <x-brokers></x-brokers>
        <x-description></x-description>
        <x-contact></x-contact>
       
        <!-- Footer Start -->
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> روبورچین | برنامه نویسی شده با <i class="mdi mdi-heart text-danger"></i> توسط شرکت <a href="http://stackteam.org/" target="_blank" class="text-reset">Stackteam</a>.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-end mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/american-ex.png" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        

        <!-- javascript -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/gumshoe.polyfills.min.js') }}"></script>
        <!-- SLIDER -->
        <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
        <!-- tobii js -->
        <script src="{{ asset('assets/js/tobii.min.js') }}"></script>
        <!-- Animation -->
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <!-- Icons -->
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('assets/js/plugins.init.js') }}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="{{ asset('assets/js/app.js') }}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>