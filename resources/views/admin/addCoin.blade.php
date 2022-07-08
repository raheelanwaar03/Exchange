@extends('admin.admin_layout.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-title">
                        <h1 style="color: #FF890E" class="card-title text-center">Admin Add Coin</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.store') }}" method="POST" >
                            @csrf
                            <div class="form-group">
                                <label for="coinName">Coin Name</label>
                                <input type="text" class="form-control" id="coinName" name="coinName"
                                    placeholder="Enter Coin Name">
                            </div>
                            <div class="form-group">
                                <label for="buyPrice">Buying Price</label>
                                <input type="text" class="form-control" id="buyPrice" name="buyPrice"
                                    placeholder="Enter Coin Buy Price">
                            </div>
                            <div class="form-group">
                                <label for="sellPrice">Selling Price</label>
                                <input type="text" class="form-control" id="sellPrice" name="sellPrice"
                                    placeholder="Enter Coin Sell Price">
                            </div>
                            <button type="submit" class="btn btn-yellow">Add Coin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
@endsection
