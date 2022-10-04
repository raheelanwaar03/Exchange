@extends('auth.layout.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 m-5">
            <div class="card ">
                <div class="card-title">
                    <h3 class="text-center mt-3 display-4" style="color: #ff890e">Login To Your Account</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST" class="register-form" id="register-form">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-group form-button">
                            <input type="submit" class="btn-yellow" value="Login" />
                        </div>
                        <div>
                            <a href="{{ route('register') }}" style="font-size: 20px"> Create New Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
