@extends('user.user_layout.app')

@section('page-title')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>Welcome {{ auth()->user()->name }} <br> Logged in as: {{ auth()->user()->email }} <br> Account Status:
                    ({{ auth()->user()->account_type }}) </h3>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-white">Our Daily Transction Limit is (10$ to 1000$) for Unverified Account</p>
                    <p class="text-white">Our Daily Transction Limit is (Unlimited) for Verified Account</p>
                    <p class="text-white">Contact Us If Your Account is Rejected</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center" style="color:#FF890E">About Us
                    <hr style="width: 400px"; color="#FF890E">
                </h1>
                <p>
                    <span style="color:#FF890E"><b>History</b></span>
                    <br>
                    {{ env('APP_NAME') }} was established in the year 2022. you can look this up on the All Who is Entry
                    Website

                    {{ env('APP_NAME') }} is a total e-business solution provider that specializes in the provision of
                    fast,
                    reliable and efficient e-currency exchange service to the clients who desire to buy and sell online with
                    ease. We are one of the World's most reliable and fastest link to the World of e-currency. We help you
                    convert your Cash to E-currency and we also help you convert your E-currency to Cash. We provide
                    convenience for our clients in all areas of e-business.

                    Our mission is to provide unbeatable, un-equalled and unique e-commerce Solutions. We do not even allow
                    you to take any risks. We bear all the risk and deliver our services to your doorsteps wherever you may
                    be in the world.
                    <br>

                    <span style="color: #FF890E"><b>Who are our customers?</b></span>
                    <br>
                    We provide services to large Online Forex Brokers, Internet Merchants, Exchangers, Consultancy Companies
                    and Individuals, who prefer safe e-currency exchange, cash to e-currency or e-currency to cash services.

                    Why are we different?

                    We are one of the largest e-currency exchangers providing services to large companies as well as to any
                    client wishing to buy or sell small amount. Our customers have always up-to-date information about their
                    orders thanks to our order-tracking facility. Incoming and outgoing payments are always processed on the
                    same business day.
                    <br>
                    <span style="color:#FF890E"><b>Why choose us?</b></span>
                    <br>
                    {{ env('APP_NAME') }} is dedicated to becoming the industry leader in e-currency and crypto-currency
                    exchange, payment solutions and related services for companies and individuals
                    worldwide.{{ env('APP_NAME') }}
                    was built on the principles of credibility and security. We are one of the very few oldest and
                    long surviving exchange in the continent operating since 2007.

                    Over a decade we have been a part of the industry evolution and a solely pioneer of the ever used term -
                    Instant Funding (the term widely used now by almost all exchanges/exchangers in the country).
                </p>
            </div>
            <div class="col-md-2">

                @include('user.user_layout.sideNav')

            </div>
        </div>
    </div>
@endsection
