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
                <h1 class="text-center" style="color:#FF890E">Plese Give Us a Valuable Feedback
                    <hr style="width: 400px"; color="#FF890E">
                </h1>
                <div class="card">
                    <div class="card-title">
                        <h3 class="text-center mt-3">Your
                            satisfaction Is Our Reward!</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.review.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Stars</label>
                                <select name="stars" class="form-control">
                                    <option value="">Stars</option>
                                    <option value="5 Star">5 Star's</option>
                                    <option value="4 Star">4 Star's</option>
                                    <option value="3 Star">3 Star's</option>
                                    <option value="2 Star">2 Star's</option>
                                    <option value="1 Star">1 Star's</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Your Experince</label>
                                <textarea name="experience" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn-yellow">Enter</button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-md-2">
                @include('user.user_layout.sideNav')
            </div>
        </div>
    </div>
    </div>
@endsection
