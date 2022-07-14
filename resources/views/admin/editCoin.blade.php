@extends('admin.admin_layout.app');

@section('page-title')
    <h3>Add Coins</h3>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-title">
                        <h1 style="color: #FF890E" class="card-title text-center">Admin Edit Coin's Details</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.update',['admin'=>$admin->id]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="coinName">Coin Name</label>
                                <input type="text" class="form-control" id="coinName" name="coinName"
                                    value="{{ $admin->coinName }}">
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
                            <button type="submit" class="btn-yellow">Update Coin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
