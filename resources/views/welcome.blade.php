
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>{{ __('landing.title') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ __('landing.description') }}" />
        <meta name="keywords" content="{{ __('landing.keywords') }}" />
        <meta name="author" content="{{ __('landing.author') }}" />
        <meta name="email" content="stackteam.official@gmail.com" />
        <meta name="website" content="https://robochain.info/" />
        <meta name="Version" content="v3.0.0" />

        <meta  property="og:title" content="{{ __('landing.title') }}" />
        <meta  property="og:see_also" content="http://stackteam.org/fa/" />

        <meta  property="og:locale" content="fa_IR" />

        <meta  property="og:type" content="website" />

        <meta  property="og:description" content="{{ __('landing.description') }}" />

        <meta  property="og:url" content="http://robochain.info/" />

        <meta  property="og:site_name" content="{{ __('landing.name') }}" />

        <meta  property="og:image" content="{{ asset('assets/images/banner.png') }}" />

        <meta  property="og:image:secure_url" content="{{ asset('assets/images/banner.png') }}" />

        <meta  property="og:image:width" content="360" />

        <meta  property="og:image:height" content="360" />

        <meta  property="og:image:alt" content="استک تیم | خدمات برنامه نویسی انواع نرم افزار ها" />

        <meta  property="twitter:card" content="summary_large_image" />

        <meta  property="twitter:description" content="استک‌تیم اینجاست که استارتاپ و ایده ناب شما رو تبدیل به واقعیتی به رنگ یک اپلیکیشن و وبسایت حرفه ای کنه، ما خدمات متنوعی را در زمینه تولید و توسعه انواع نرم افزار ها با یک شیوه نوین همکاری به شما ارائه میدیم" />

        <meta  property="twitter:site" content="{{ __('landing.name') }} سرویسی از {{ __('landing.author') }}" />

        <meta  property="twitter:domain" content="robochain.org" />

        <meta  property="twitter:url" content="http://robochain.org/" />

        <meta  property="twitter:creator" content="@https://twitter.com/Stackteam_org" />

        <meta  property="twitter:image" content="{{ asset('assets/images/banner.png') }}" />

        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />


        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="https://stackteam.org/assets/images/fav-icon/icon.png">
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
                    <a href="tel:+989120186223" class="btn btn-outline-primary rounded">{{ __('landing.sale') }}</a>
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
                                            <h6 class="fw-bold mb-0">Robochain.info | روبوچین </h6>
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
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> روبورچین | برنامه نویسی شده با <i class="mdi mdi-heart text-danger"></i> توسط شرکت <a href="http://stackteam.org/fa/" target="_blank" class="text-reset">استک تیم</a></p>
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
        
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $(".send").click(function(event) {
                    event.preventDefault();
                
                    var pos = $(this).attr('pos');
                    // get Data;
                    var fullname = $('#fullname-' + pos).val();
                    var mobile = $('#mobile-' + pos).val();
                    var comment = $('#comment-' + pos).val();
        
                    console.log("name: " + fullname + " phone: " + mobile + " comment: " + comment);
                    
                    $.ajax({
                        url:"https://robochain.info/api/store/comment",
                        data: { 'fullname' : fullname,'mobile' : mobile,'comment' : comment},
                        method: "POST",
                        success: function(data){
                            $('#send-message-' + pos).html(data['message']);

                            $('#fullname-' + pos).val("");
                            $('#mobile-' + pos).val("");
                            $('#comment-' + pos).val("");
                        }
                    });


                });
            });
        </script>
        

    </body>
</html>