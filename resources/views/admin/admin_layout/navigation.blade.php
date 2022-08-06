<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Instance Exchange</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('assets/images/favi.png') }}" type="image/x-icon" />
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

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- Navigation Bar -->
    <header class="top-header">
        {{-- <div class="header_top"> --}}
        <div class="container-fluid">
            <div class="row justify-content-center align-itmes-center">
                <div class="col-md-9 d-flex justify-content-center align-itmes-center">
                    <div class="logo_section">
                        <a class="navbar-brand" href="{{ route('admin.index') }}"><img
                                src="{{ asset('assets/images/logo.png') }}" alt="image"></a>
                    </div>

                </div>
                <div class="col-md-6 mt-3">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn-yellow mt-3">Logout</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- </div> --}}
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

    {{-- start Navigation New --}}


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <ul class="navbar" id="mainNavbar">
                                    <li>
                                        <a href="{{ route('admin.index') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.help') }}">How to
                                            Buy$Sell</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.contactUs') }}">Contact
                                            Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.policy') }}">FAQ</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.aboutUs') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.create') }}">Add E-Currency</a>
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
