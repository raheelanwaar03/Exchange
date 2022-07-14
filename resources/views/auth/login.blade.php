@extends('layouts.logApp')


@section('linkTitle')
    Login to Exchange Currency
@endsection



@section('title')
    <h1 class="form-title">Login</h1>
@endsection

@section('form')
    <form action="{{ route('login') }}" method="POST" class="register-form" id="register-form">
        @csrf
        <div class="form-group">
            <label for="email"><i class="zmdi zmdi-email"></i></label>
            <input type="email" name="email" id="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <label for="password"><i class="zmdi zmdi-lock"></i></label>
            <input type="password" name="password" id="password" placeholder="Password" />
        </div>

        <div class="form-group form-button">
            <input type="submit" name="signup" id="signup" class="form-submit" value="Login" />
        </div>
    </form>
    @section('logFooter')
    <div class="signup-image">
        <figure><img src="{{ asset('assets/images/img3.png') }}" alt="sing up image"></figure>
        <a href="{{ route('register') }}" class="signup-image-link">I Have'nt Registered My Account</a>
    </div>
@endsection
@endsection
