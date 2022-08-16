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
                <h1 class="text-center" style="color:#FF890E">Buy E-Currency
                    <hr style="width: 400px"; color="#FF890E">
                </h1>
                <div class="card">
                    <div class="card-title">
                        <h3 class="text-center mt-3">Be Careful while providing your details! </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.buy.ecurrency.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Enter Desired Amount (in US Dollars)</label>
                                <input type="text" class="form-control" name="buyingAmount" placeholder="e.g 50.00 $">
                            </div>
                            <div class="form-group">
                                <label for="">E-Bank Name (to Fund)</label>
                                <select name="e_bank" id="" class="form-control">
                                    <option value="">Select E-Bank</option>
                                    <option value="paypal">Paypal</option>
                                    <option value="payeer">Payeer</option>
                                    <option value="bitcoin">Bitcoin</option>
                                    <option value="busd">BUSD</option>
                                    <option value="usdt">USDT</option>
                                    <option value="etherum">Etherum</option>
                                    <option value="skrill">Skrill</option>
                                    <option value="neteller">Neteller</option>
                                    <option value="perfectmoney">Perfectmoney</option>
                                    <option value="payoneer">Payoneer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">E-Account Number</label>
                                <input type="text" class="form-control" name="account_number"
                                    placeholder="Enter E-Account Number to trasfer fund">
                            </div>
                            <div class="form-group">
                                <label for="">E-Name in the Bank</label>
                                <input type="text" class="form-control" name="account_name"
                                    placeholder="Enter the Name which you had been provide to your E-Bank">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Not Robot ({{ $first }} + {{ $second }})</label>
                                <input type="text" class="form-control" name="confirm_not_robot"
                                    placeholder="Enter Result">
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
