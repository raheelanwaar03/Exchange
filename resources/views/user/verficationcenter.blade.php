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
            <div class="col-md-8 m-3">
                <h1 class="text-center" style="color:#FF890E">Verification Center
                    <hr style="width: 400px"; color="#FF890E">
                </h1>
                <div class="card">
                    <div class="card-title">
                        <h3 class="text-center mt-3">Please Provide Your Real Details OtherWise It will not Verified! </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.account.verification.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Your Passport</label>
                                <select name="method" class="form-control">
                                    <option value="">Select Method</option>
                                    <option value="passport">Passport</option>
                                    <option value="voter">Voter Card</option>
                                    <option value="nin">National Id (NIN)</option>
                                    <option value="drivingLicence">Driving Licence</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Front Side</label>
                                <input type="file" name="front_side" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Back Side</label>
                                <input type="file" name="back_side" class="form-control">
                            </div>
                            <button type="submit" class="btn-yellow">Procced</button>
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
