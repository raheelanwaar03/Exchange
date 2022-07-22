@extends('user.user_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }} Account </h3>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center" style="color:#FF890E">Contact Us
                    <hr style="width: 400px"; color="#FF890E">
                </h1>
                <p>
                    Office Working Hours:
                    Monday - Friday: 8AM - 5PM & Saturday: 8AM - 1PM
                    <br>
                    {{-- Address: {{ env('APP_Address') }} --}}
                    <br>
                    Telephone: {{ env('APP_Phone') }}
                    <br>
                    Email: {{ env('APP_Email') }}
                    <br>
                    Telegram: {{ env('APP_Telegram') }}
                    <br>
                    {{-- Facebook: {{ env('APP_Facebook') }}
                    <br> --}}
                    Instagram: {{ env('APP_Instagram') }}
                    <br>
                    Twitter: {{ env('APP_Twitter') }}
                    <br>
                </p>
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
