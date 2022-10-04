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
                        <form action="{{ route('register') }}" method="POST" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name">Enter Your Name</i></label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email">Your Working Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="phone">Your Phone Number</label>
                                <input type="phone" name="phone_number" class="form-control" placeholder="Your Phone" />
                            </div>
                            <div class="form-group">
                                <label for="date_of_birth">Date Of Birth</i></label>
                                <input type="brith_date" name="date_of_birth" class="form-control"
                                    placeholder="Your Date of Brith in 2022-07-9" />
                            </div>
                            <div class="form-group">
                                <label for="country">Country</i></label>
                                <input type="country" name="country" class="form-control" placeholder="Your Country" />
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Re-type Password</i></label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <label for="answer">{{ $first_num . '+' . $second_num }} = ?</label>
                                <input type="text" name="answer" class="form-control"
                                    placeholder="Enter the answer that you are not a Robot">
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" class="btn-yellow" value="Register" />
                            </div>
                            <div>
                                <a href="{{ route('login') }}" style="font-size:20px">Already have Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
