<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

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
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/custom.css" />
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>

    <header class="top-header">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="logo_section">
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
                    </div>
                    <div class="site_information">
                        <ul>
                            <li><a href="mailto:exchang@gmail.com"><img src="images/mail_icon.png"
                                        alt="#" />exchang@gmail.com</a></li>
                            <li><a href="tel:exchang@gmail.com"><img src="images/phone_icon.png"
                                        alt="#" />+7123569847</a></li>
                            <li><a class="join_bt" href="{{ route('register') }}">Sign Up</a></li>
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
                                        <li><a class="nav-link active" href="index.html">Home</a></li>
                                        <li><a class="nav-link" href="about.html">About</a></li>
                                        <li><a class="nav-link" href="exchange.html">Exchange</a></li>
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
                                <img src="images/search_icon.png" alt="#" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(images/slide_img.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3>Progress & Success<br><strong>Currency</strong></h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Start Exchange ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(images/slide_img.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3>Progress & Success<br><strong>Currency</strong></h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Start Exchange ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
