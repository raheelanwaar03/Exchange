@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Welcome {{ auth()->user()->name }} To Admin Dashboard <br> Logged in as: {{ auth()->user()->email }} <br> Account
        Status:
        ({{ auth()->user()->account_type }}) </h3>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-title">
                        <h1 style="color: #FF890E" class="card-title text-center">Admin Add E-currency
                            Rates</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">E-Bank Name</label>
                                <select name="coinName" id="" class="form-control">
                                    <option value="">Select E-Bank</option>
                                    <option value="Paypal">Paypal</option>
                                    <option value="Payeer">Payeer</option>
                                    <option value="Bitcoin">Bitcoin</option>
                                    <option value="BUSD">BUSD</option>
                                    <option value="USDT">USDT</option>
                                    <option value="Etherum">Etherum</option>x
                                    <option value="Skrill">Skrill</option>
                                    <option value="Neteller">Neteller</option>
                                    <option value="Perfectmoney">Perfectmoney</option>
                                    <option value="Payoneer">Payoneer</option>
                                </select>
                            </div>
                            <div>
                                <label for="">E-Bank Wallet</label>
                                <input type="text" class="form-control" name="e_bank"
                                    placeholder="Admin Your E-bank Details">
                            </div>
                            <div class="form-group">
                                <label for="coinImage">E-currency Image</label>
                                <input type="file" class="form-control" id="coinImage" name="coinImage">
                            </div>
                            <div class="form-group">
                                <label for="buyPrice">Buying Price</label>
                                <input type="text" class="form-control" id="buyPrice" name="buyPrice"
                                    placeholder="Enter E-currency Buy Price">
                            </div>
                            <div class="form-group">
                                <label for="sellPrice">Selling Price</label>
                                <input type="text" class="form-control" id="sellPrice" name="sellPrice"
                                    placeholder="Enter E-currency Sell Price">
                            </div>
                            <button type="submit" class="btn-yellow">Add E-currency</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @include('admin.admin_layout.sideNav')
            </div>
        </div>
    </div>
@endsection
