@extends('layouts.logApp');

@section('linkTitle')
    Sign Up to Exchange Currency
@endsection

@section('title')
    <h1 class="form-title">Sign Up</h1>
@endsection

@section('form')
    <form action="{{ route('register') }}" method="POST" class="register-form" id="register-form">
        @csrf
        <div class="form-group">
            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
            <input type="text" name="name" id="name" placeholder="Your Name" />
        </div>
        <div class="form-group">
            <label for="email"><i class="zmdi zmdi-email"></i></label>
            <input type="email" name="email" id="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <label for="phone"><i class="zmdi zmdi-phone-in-talk"></i></label>
            <input type="phone" name="phone" id="phone" placeholder="Your Phone" />
        </div>
        <div class="form-group">
            <label for="brith_date"><i class="zmdi zmdi-calendar"></i></label>
            <input type="brith_date" name="brith_date" id="brith_date" placeholder="Your Date of Brith in 2022-07-9" />
        </div>
        <div class="form-group">
            <label for="country"><i class="zmdi zmdi-gps-dot"></i></label>
            <input type="country" name="country" id="country" placeholder="Your Country" />
        </div>
        <div class="form-group">
            <label for="state"><i class="zmdi zmdi-gps-dot"></i></label>
            <input type="state" name="state" id="state" placeholder="Your State" />
        </div>
        <div class="form-group">
            <label for="city"><i class="zmdi zmdi-gps-dot"></i></label>
            <input type="city" name="city" id="city" placeholder="Your City" />
        </div>
        <div class="form-group">
            <label for="street"><i class="zmdi zmdi-gps-dot"></i></label>
            <input type="street" name="street" id="street" placeholder="Your Street" />
        </div>
        <div class="form-group">
            <label for="password"><i class="zmdi zmdi-lock"></i></label>
            <input type="password" name="password" id="password" placeholder="Password" />
        </div>
        <div class="form-group">
            <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                placeholder="Repeat your password" />
        </div>
        <div class="form-group form-button">
            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
        </div>
    </form>
@section('logFooter')
    <div class="signup-image">
        <figure><img src="{{ asset('assets/images/img3.png') }}" alt="sing up image"></figure>
        <a href="{{ route('login') }}" class="signup-image-link">I am already member</a>
    </div>
@endsection
@endsection
