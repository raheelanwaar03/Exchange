@extends('user.user_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }} Account </h3>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-3">
                <h1 class="text-center" style="color:#FF890E">Add your Bank or E-Bank Details
                    <hr style="width: 400px"; color="#FF890E">
                </h1>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Bank or E-Bank Name</label>
                        <input type="text" class="form-control" name="bank_name"
                            placeholder="Enter your Bank or E-Bank Name">
                    </div>
                    <div class="form-group">
                        <label for="">Account Number</label>
                        <input type="text" class="form-control" name="account_number" placeholder="Enter Account Number">
                    </div>
                    <div class="form-group">
                        <label for="">Account Name</label>
                        <input type="text" class="form-control" name="account_name" placeholder="Enter Account Name">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-2">

            @include('user.user_layout.sideNav')

        </div>
    </div>
    </div>
@endsection
