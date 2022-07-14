@extends('layouts.app');

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img src="{{ asset('assets/images/img1.png') }}" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                            <h2><span class="theme_color">{{ env('APP_NAME') }} </span></h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>
                            {{ env('APP_NAME') }} is a total e-business solution provider that specializes in the provision
                            of fast, reliable and efficient e-currency exchange service to the clients who desire to buy and
                            sell online with ease. We are one of the World's most reliable and fastest link to the World of
                            e-currency. We help you convert your Cash to E-currency and we also help you convert your
                            E-currency to Cash. We provide convenience for our clients in all areas of e-business.

                            Our mission is to provide unbeatable, un-equalled and unique e-commerce Solutions. We do not
                            even allow you to take any risks. We bear all the risk and deliver our services to your
                            doorsteps wherever you may be in the world.</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="#">About more ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="{{ asset('assets/images/s1.png') }}" alt="#" />
                        <h4>Safe & Secure</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="{{ asset('assets/images/s2.png') }}" alt="#" />
                        <h4>Mobile Apps</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="{{ asset('assets/images/s3.png') }}" alt="#" />
                        <h4>Wallet</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="{{ asset('assets/images/s4.png') }}" alt="#" />
                        <h4>Experts Support</h4>
                    </div>
                </div>
            </div>
            <div class="row margin-top_30">
                <div class="col-sm-12">
                    <div class="full">
                        <div class="center">
                            <a class="main_bt" href="#">About more ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section white_fonts" style="background: #2a2a2a;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="background: #fff;">
                    <div class="full text_align_right_img">
                        <img src="{{ asset('assets/images/img2.png') }}" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                            <h2><span class="theme_color">Apply for</span> Exchange</h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>Welcome, E-money or Electronic money or E-currency (also known as fiat currency) is a virtual
                            currency used as a means of payment for goods and services on the internet. There are millions
                            of online stores and merchants that accept E-currency worldwide. Examples of such e-currencies
                            are Perfect Money (PM), Okpay, PayPal, Skrill, Solid Trust Pay, WebMoney, Payeer etc.

                            At {{ env('APP_NAME') }}, we provide an easy platform for funding and withdrawal from the major
                            e-currencies, some of which are already mentioned above. So, you do not need to worry about
                            converting your e-currency to cash or your cash to e-currency.</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="#">Exchange ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section layout_padding about_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                            <h2>About</h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>{{ env('APP_NAME') }} is dedicated to becoming the industry leader in e-currency and
                            crypto-currency exchange, payment solutions and related services for companies and individuals
                            worldwide. {{ env('APP_NAME') }} was built on the principles of credibility and security. We are
                            one of the very few oldest and long surviving exchange in the continent operating since 2007.

                            Over a decade we have been a part of the industry evolution and a solely pioneer of the ever
                            used term - Instant Funding (the term widely used now by almost all exchanges/exchangers in the
                            country).</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="#">Read More ></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img src="{{ asset('assets/images/img3.png') }}" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span>News</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="{{ asset('assets/images/b1.png') }}" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                        <div class="blog_details">
                            <h3>Bitcoin News</h3>
                            <p>pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="{{ asset('assets/images/b2.png') }}" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                        <div class="blog_details">
                            <h3>Ethereum News</h3>
                            <p>pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="{{ asset('assets/images/b3.png') }}" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                        <div class="blog_details">
                            <h3>Light News</h3>
                            <p>pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span>Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form class="contact_form_inner" action="#">
                            <fieldset>
                                <div class="field">
                                    <input type="text" name="name" placeholder="Your name" />
                                </div>
                                <div class="field">
                                    <input type="email" name="email" placeholder="Email" />
                                </div>
                                <div class="field">
                                    <input type="text" name="phone_no" placeholder="Phone number" />
                                </div>
                                <div class="field">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                                <div class="field center">
                                    <button>SEND</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
