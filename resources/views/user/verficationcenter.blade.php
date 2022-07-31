@extends('user.user_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }} Account </h3>
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
                        <form action="{{ route('user.account.verification.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Your Passport</label>
                                <input type="text" name="passport" class="form-control"
                                    placeholder="Please Enter Your Passport Number">
                            </div>
                            <div class="form-group">
                                <label for="">Your Voters Card</label>
                                <input type="text" name="voterCard" class="form-control"
                                    placeholder="Please Enter Your Voters Card Number">
                            </div>
                            <div class="form-group">
                                <label for="">Your National Identification Number (NIN)</label>
                                <input type="text" name="nin" class="form-control"
                                    placeholder="Please Enter Your National Identification Number">
                            </div>
                            <div class="form-group">
                                <label for="">Your Driving Licence</label>
                                <input type="text" name="drivingLicence" class="form-control"
                                    placeholder="Please Enter Your National Identification Number">
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
