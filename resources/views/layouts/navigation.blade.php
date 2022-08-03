<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ env('APP_NAME') }}</title>
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
    <!--End of Tawk.to Script-->
</head>

<body id="home" data-offset="98">

    <div id="preloader">
        <div class="loader">
            <img src="{{ asset('assets/images/loader.gif') }}" alt="#" />
        </div>
    </div>

    <header class="top-header">
        {{-- <div class="header_top"> --}}
        <div class="container-fluid">
            <div class="row justify-content-center align-itmes-center">
                <div class="col-md-9 d-flex justify-content-center align-itmes-center">
                    <div class="logo_section">
                        <a class="navbar-brand" href="{{ route('register') }}"><img
                                src="{{ asset('assets/images/logo.png') }}" alt="image"></a>
                    </div>
                    <div class="site_information mt-3">
                        <ul>
                            <li><a href="mailto:support@instantflexy.com"><img
                                        src="{{ asset('assets/images/mail_icon.png') }}"
                                        alt="#" />{{ env('APP_Email') }}</a></li>
                            <li><a href="tel:+08063345163"><img src="{{ asset('assets/images/phone_icon.png') }}"
                                        alt="#" />{{ env('APP_Phone') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex justify-content-around align-items-center mt-4">
                        <a class="join_bt mr-3" href="{{ route('register') }}">SignUp</a>
                        <a class="join_bt" href="{{ route('login') }}">login</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </header>

    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image: url(assets/images/slide_img.png)">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3><small>Welcome to the TRUST&EFFICIENCY </small>
                                            <br>{{ env('APP_NAME') }}
                                        </h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Start Exchange With
                                            {{ env('APP_NAME') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image: url(assets/images/slide_img.png)">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3><small>Instant Funding & Instant Withdrawal!</small>
                                            <br>{{ env('APP_NAME') }}
                                        </h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Start Exchange
                                            with{{ env('APP_NAME') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image: url(assets/images/slide_img.png)">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3><small>Tested & Trusted</small>
                                            <br>{{ env('APP_NAME') }}
                                        </h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Start Exchange
                                            with{{ env('APP_NAME') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image: url(assets/images/slide_img.png)">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3><small>Highly Competitive & Unbeatable Prices</small>
                                            <br>{{ env('APP_NAME') }}
                                        </h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Start Exchange
                                            with{{ env('APP_NAME') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image: url(assets/images/slide_img.png)">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3><small>24/7 MultiChannel Customer Support</small>
                                            <br>{{ env('APP_NAME') }}
                                        </h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Start Exchange
                                            with{{ env('APP_NAME') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image: url(assets/images/slide_img.png)">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3><small>We are the Choice of the Whales!</small>
                                            <br>{{ env('APP_NAME') }}
                                        </h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Start Exchange
                                            with{{ env('APP_NAME') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- navbar --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('landingPage.aboutUs') }}">About Us</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('landingPage.contactUs') }}">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('landingPage.faq') }}">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('landingPage.help') }}">How to Buy$Sell</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('landingPage.policy') }}">Terms & Conditions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('landingPage.news') }}">News & Updates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Reviews</a>
                            </li>
                        </ul>
                </nav>
            </div>
        </div>
    </div>
