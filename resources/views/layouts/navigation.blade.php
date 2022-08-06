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
    <!--End of Tawk.to Script-->
</head>

<body id="home" data-offset="98">

    <header class="top-header">
        {{-- <div class="header_top"> --}}
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
        {{-- </div> --}}
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
                <h5 class="text-white">We guarantee instant funding 24/7. If you have questions or suggestions, feel free to Contact us.</h5>
                <h4 class="text-white">Email: info@instantflexy.com</h4>
                <h4 class="text-white">Phone: +2349128499395</h4>
                <p class="text-white">either you can use our 24 hour live chat support or social accounts</p>
            </div>
            <div class="col-md-4">
                    <img src="{{ asset('assets/images/neteller.jpg') }}" alt="neteller" height="80px" width="80px" class="img-fluid m-3">
                    <img src="{{ asset('assets/images/bitcoin.png') }}" alt="bitcoin" height="80px" width="80px" class="img-fluid m-3">
                    <img src="{{ asset('assets/images/paypal.png') }}" alt="paypal" height="80px" width="80px" class="img-fluid m-3">
                    <img src="{{ asset('assets/images/perfect.png') }}" alt="pm" height="80px" width="80px" class="img-fluid m-3">
                    <img src="{{ asset('assets/images/Payoneer.png') }}" alt="payooneer" height="80px" width="80px" class="img-fluid m-3">
                    <img src="{{ asset('assets/images/skrill.png') }}" alt="skrill" height="80px" width="80px" class="img-fluid m-3">
                    <img src="{{ asset('assets/images/payeer.png') }}" alt="payeer" height="80px" width="80px" class="img-fluid m-3">
            </div>
        </div>
    </div>


    {{-- navbar --}}
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
                                        <a href="#">Reviews</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
