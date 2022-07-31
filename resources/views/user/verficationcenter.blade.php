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
                        <form action="{{ route('user.account.verification.store') }}" method="POST" enctype="multipart/form-data">
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
