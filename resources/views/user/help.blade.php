@extends('user.user_layout.app')

@section('page-title')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>Welcome {{ auth()->user()->name }} <br> Logged in as: {{ auth()->user()->email }} <br> Account Status:
                    ({{ auth()->user()->account_type }}) </h3>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-white">Our Daily Transction Limit is (50$ to 1000$) for Unverified Account</p>
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
                <h1 class="text-center" style="color:#FF890E">How to Buy and Sell
                    <hr style="width: 400px"; color="#FF890E">
                </h1>
                <p>
                    Welcome, E-money or Electronic money or E-currency (also known as fiat currency) is a virtual currency
                    used as a means of payment for goods and services on the internet. There are millions of online stores
                    and merchants that accept E-currency worldwide. Examples of such e-currencies are Perfect Money (PM),
                    Payoneer, PayPal, Skrill, Neteller, USDT , Bitcoin , BUSD Payeer etc.
                    <br>

                    At {{ env('APP_NAME') }}, we provide an easy platform for funding and withdrawal from the major
                    e-currencies, some of which are already mentioned above. So, you do not need to worry about converting
                    your e-currency to cash or your cash to e-currency.
                </p>
            </div>
            <div class="col-md-2">
                @include('user.user_layout.sideNav')
            </div>
        </div>
    </div>
@endsection
