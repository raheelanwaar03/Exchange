@extends('user.user_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }}Account </h3>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color:#FF890E">Live Rates of E-currency
                    <hr style="width: 400px"; color="#FF890E">
                </h1>
                <div>
                    <?php
                           $file = file_get_contents('https://yobit.net/api/3/ticker/btc_usd');
                           
                            echo $file;
                    ?>
                </div>
            </div>
        </div>
    </div>
@endsection
