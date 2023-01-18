<!doctype html>
<html lang="en">

<head>
    <title>{{ env('App_NAME') }} </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revslider/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="javascript:void(0)" data-style="styles">
    <link rel="stylesheet" href="{{ asset('assets/css/style-customizer.css') }}" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113778816-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-113778816-1');
    </script>
</head>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="{{ asset('assets/images/loader.gif') }}" alt="loder">
        </div>
    </div>
    <header class="simpal-yellow">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="topbar-left">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-phone text-blue"></i>+2349128499395</li>
                                <li class="list-inline-item ms-2"><i class="fa fa-envelope-o ms-3"> </i>
                                    support@instantflexy.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="topbar-right text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <ul class="list-inline iq-left">
                                        <li class="list-inline-item"><a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target=".iq-login" data-bs-whatever="@mdo"><i
                                                    class="fa fa-lock"></i>Login</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target=".iq-register" data-bs-whatever="@fat"><i
                                                    class="fa fa-user"></i>Register</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i
                                            class="fa fa-comments-o ms-3"></i>Free Consulting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="home-1.html"><img id="logo_dark" class="img-fluid" src="{{ asset('assets/images/logo.png') }}"
                                    alt="logo"></a>
                        </div>
                        <nav> <a id="resp-menu" class="responsive-menu" href="javascript:void(0)"><i
                                    class="fa fa-reorder"></i> Menu</a>
                            <ul class="menu text-end">
                                <li><a class="active" href="javascript:void(0)">HOME</a>
                                    <ul class="sub-menu">
                                        <li><a href="home-1.html">Home 1</a></li>
                                        <li><a class="active" href="home-2.html">Home 2</a></li>
                                        <li><a href="home-3.html">Home 3</a></li>
                                        <li><a href="home-4.html">Home 4</a></li>
                                        <li><a href="home-5.html">Home 5</a></li>
                                        <li><a href="app-landing-page.html">App Landing Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="javascript:void(0)">Services <i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="services-1.html">Services 1</a></li>
                                                <li><a href="services-2.html">Services 2</a></li>
                                                <li><a href="services-3.html">Services 3</a></li>
                                                <li><a href="services-details.html">Services Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="history.html">History</a></li>
                                        <li><a href="event.html">Event</a></li>
                                        <li><a href="customer-support.html">Customer Support</a></li>
                                        <li><a href="clients.html">Clients</a></li>
                                        <li><a href="javascript:void(0)">Team <i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="team-1.html">Team 1</a></li>
                                                <li><a href="team-2.html">Team 2</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Pricing <i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="pricing.html">Pricing 1</a></li>
                                                <li><a href="pricing-1.html">Pricing 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Faq <i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="faqs-1.html">Faq 1</a></li>
                                                <li><a href="faqs-2.html">Faq 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Coming Soon <i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="coming-soon-1.html">Coming Soon 1</a></li>
                                                <li><a href="coming-soon-2.html">Coming Soon 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Error <i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="error-404-1.html">Error 404 1</a></li>
                                                <li><a href="error-404-2.html">Error 404 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Breadcrumb <i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="breadcrumb-left.html">Breadcrumb left</a></li>
                                                <li><a href="breadcrumb-right.html">Breadcrumb Right</a></li>
                                                <li><a href="breadcrumb-center.html">Breadcrumb Center</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="video.html">Video</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Coin</a>
                                    <ul class="sub-menu">
                                        <li><a href="market-data.html">Market Data</a></li>
                                        <li><a href="wallet.html">WallEt</a></li>
                                        <li><a href="buy-sell.html">buy & sell</a></li>
                                        <li><a href="exchange.html">Exchange</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-2-columns.html">2 Columns</a></li>
                                        <li><a href="blog-3-columns.html">3 Columns</a></li>
                                        <li><a href="blog-fullwidth.html">Full Width</a></li>
                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="blog-single.html">Single Page</a></li>
                                        <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                                        <li><a href="blog-single-right-sidebar.html">Single Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-2-columns.html">Shop 2 columns</a></li>
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                        <li><a href="shop-cart.html">Shop Cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Contact</a>
                                    <ul class="sub-menu">
                                        <li><a href="contact-1.html">Contact Us 1</a></li>
                                        <li><a href="contact-2.html">Contact Us 2</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="iq-search"> <a class="search-btn not_click"
                                            href="javascript:void(0);"> <span>Search Button</span></a>
                                        <div class="search-box not-click">
                                            <input type="email" class="form-control not-click"
                                                id="exampleInputEmail1" placeholder="Search">
                                            <i class="ti-search"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>










{{-- !DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pogo-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/62e6fc9254f06e12d88c3778/1g9b4l81o';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!--End of Tawk.to Script-->
</head>

<body id="home" data-offset="98">

    <header class="top-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-around align-itmes-center">
                    <div class="logo_section">
                        <a class="navbar-brand" href="{{ route('landingPage') }}"><img
                                src="{{ asset('assets/images/logo.png') }}" alt="image"></a>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <a class="join_bt mr-3" href="{{ route('register') }}">SignUp</a>
                        <a class="join_bt" href="{{ route('login') }}">login</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <hr style="color: #ff890e;font-size:2px">

    <div class="container bg-mrinda">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-white">InstantFlexy Exchange</h1>
                <p class="text-white">
                    InstantFlexy is the leading digital currency exchange in Nigeria with professional team working day
                    and night for quality and fast delivery of services since the year 2022.
                    <br>
                    Thousands of satisfied customers cannot be wrong.
                </p>
                <br>
                <h5 class="text-white">We guarantee instant funding 24/7. If you have questions or suggestions, feel
                    free to Contact us.</h5>
                <h4 class="text-white">Email: support@instantflexy.com</h4>
                <h4 class="text-white">Phone:+2349128499395</h4>
                <p class="text-white">either you can use our 24 hour live chat support or social accounts</p>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('assets/images/neteller.jpg') }}" alt="neteller" height="80px" width="80px"
                    class="img-fluid m-3">
                <img src="{{ asset('assets/images/bitcoin.png') }}" alt="bitcoin" height="80px" width="80px"
                    class="img-fluid m-3">
                <img src="{{ asset('assets/images/paypal.png') }}" alt="paypal" height="80px" width="80px"
                    class="img-fluid m-3">
                <img src="{{ asset('assets/images/perfect.png') }}" alt="pm" height="80px" width="80px"
                    class="img-fluid m-3">
                <img src="{{ asset('assets/images/Payoneer.png') }}" alt="payooneer" height="80px" width="80px"
                    class="img-fluid m-3">
                <img src="{{ asset('assets/images/Skrill.png') }}" alt="skrill" height="80px" width="80px"
                    class="img-fluid m-3">
                <img src="{{ asset('assets/images/payeer.png') }}" alt="payeer" height="80px" width="80px"
                    class="img-fluid m-3">
                <img src="{{ asset('assets/images/BUSD.jpeg') }}" alt="BUSD" height="80px" width="80px"
                    class="img-fluid m-3">
                <img src="{{ asset('assets/images/ethereum.png') }}" alt="etherum" height="80px" width="80px"
                    class="img-fluid m-3">
                <img src="{{ asset('assets/images/tether.png') }}" alt="tether" height="80px" width="80px"
                    class="img-fluid m-3">
                <img src="{{ asset('assets/images/usdt.png') }}" alt="usdt" height="80px" width="80px"
                    class="img-fluid m-3">
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <ul class="navbar" id="mainNavbar">
                                    <li>
                                        <a href="{{ route('landingPage') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('landingPage.help') }}">How to
                                            Buy$Sell</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('landingPage.contactUs') }}">Contact
                                            Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('landingPage.faq') }}">FAQ</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('landingPage.aboutUs') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('landingPage.policy') }}">Terms &
                                            Conditions</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('landingPage.news') }}">News &
                                            Updates</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('landingPage.review') }}">FeedBack</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
