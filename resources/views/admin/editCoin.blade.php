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
                        <h1 style="color: #FF890E" class="card-title text-center">Admin Edit Coin's Details</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.update', ['admin' => $admin->id]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="coinName">Coin Name</label>
                                <input type="text" class="form-control" id="coinName" name="coinName"
                                    value="{{ $admin->coinName }}">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" id="coinImage" name="coinImage">
                            </div>
                            <div class="form-group">
                                <label for="e_bank">E-Bank Details</label>
                                <input type="text" class="form-control" id="e_bank" name="e_bank"
                                    value="{{ $admin->e_bank }}">
                            </div>
                            <div class="form-group">
                                <label for="buyPrice">Buying Price</label>
                                <input type="text" class="form-control" id="buyPrice" name="buyPrice"
                                    value="{{ $admin->buyPrice }}">
                            </div>
                            <div class="form-group">
                                <label for="sellPrice">Selling Price</label>
                                <input type="text" class="form-control" id="sellPrice" name="sellPrice"
                                    value="{{ $admin->sellPrice }}">
                            </div>
                            <button type="submit" class="btn-yellow">Update E-currency</button>
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
