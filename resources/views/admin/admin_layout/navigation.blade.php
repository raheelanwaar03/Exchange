<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Instance Exchange</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pogo-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <div id="preloader">
        <div class="loader">
            <img src="{{ asset('assets/images/loader.gif') }}" alt="#" />
        </div>
    </div>
    <!-- Navigation Bar -->
    <header class="top-header">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="logo_section">
                        <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/logo.png') }}"
                                alt="image"></a>
                    </div>
                    <div class="site_information">
                        <ul>
                            <li><a href="mailto:support@instantflexy.com"><img
                                        src="{{ asset('assets/images/mail_icon.png') }}"
                                        alt="#" />{{ env('APP_Email') }}</a></li>
                            <li><a href="tel:+08063345163"><img src="{{ asset('assets/images/phone_icon.png') }}"
                                        alt="#" />{{ env('APP_Phone') }}</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="Post">
                                    @csrf
                                    <button type="submit" class="btn-yellow">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container">
                <div class="col-sm-12">
                    <div class="menu_orange_section" style="background: #ff880e;">
                        <nav class="navbar header-nav navbar-expand-lg">
                            <div class="menu_section">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                                    <ul class="navbar-nav">
                                        <li><a class="nav-link" href="{{ route('admin.index') }}">Home</a></li>
                                        <li><a class="nav-link" href="about.html">About</a></li>
                                        <li><a class="nav-link" href="{{ route('admin.create') }}">Add Coin</a></li>
                                        <li><a class="nav-link" href="services.html">Services</a></li>
                                        <li><a class="nav-link" href="new.html">News</a></li>
                                        <li><a class="nav-link" href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="search-box">
                            <input type="text" class="search-txt" placeholder="Search">
                            <a class="search-btn">
                                <img src="{{ asset('assets/images/search_icon.png') }}" alt="#" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->
    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        @yield('page-title')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
