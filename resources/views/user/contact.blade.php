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
            <div class="col-md-8 m-3">
                <h1 class="text-center" style="color:#FF890E">Contact Us
                    <hr style="width: 400px"; color="#FF890E">
                </h1>
                <p>
                    Office Working Hours:
                    Monday - Friday: 8AM - 5PM & Saturday: 8AM - 1PM
                    <br>
                    Or call us at: {{ env('APP_Phone') }}
                    <br>
                </p>
                <h4 class="text-center">You can contact us on clicking these Icons</h4>
                <div class="d-flex justify-content-center align-items-center my-5">

                    <a href="https://web.whatsapp.com/send?phone={{ env('APP_Phone2') }}" target="_blank" class="m-3">
                        <img src="{{ asset('assets/images/whatsapp.png') }}" height="50px" width="50px">
                    </a>

                    <a href="https://www.instagram.com/?url=https://www.drdrop.com/" target="_blank">
                        <img src="{{ asset('assets/images/instagram.png') }}" height="50px" width="50px">
                    </a>

                    <a href="https://telegram.com/send?={{ env('APP_TELEGRAM') }}" target="_blank">
                        <img src="{{ asset('assets/images/Telegram.png') }}" height="50px" width="60px">
                    </a>

                    <a href="https://youtube.com/send?={{ env('APP_TELEGRAM') }}" target="_blank">
                        <img src="{{ asset('assets/images/YouTube.jpg') }}" height="50px" width="50px">
                    </a>

                    <a href="https://twitter.com/send?={{ env('APP_TWITTER') }}" target="_blank">
                        <img src="{{ asset('assets/images/twitter.png') }}" height="50px" width="50px">
                    </a>

                </div>
                <p>
                    NOTICE: Funding and withdrawals are attended 24/7. However, instant funding is only guaranteed during
                    the working hours stated above.
                </p>
            </div>
            <div class="col-md-2">

                @include('user.user_layout.sideNav')

            </div>
        </div>
    </div>
@endsection
