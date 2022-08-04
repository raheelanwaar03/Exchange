@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Admin Dashboard</h3>
@endsection

@section('content')
    <h1 style="color: #ff880e;" class="text-center">News and Updates</h1>

    <div class="container">
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
            <div class="col-md-3">
                @include('admin.admin_layout.sideNav')
            </div>
        </div>
    </div>
@endsection
