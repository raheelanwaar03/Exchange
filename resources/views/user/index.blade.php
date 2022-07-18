@extends('user.user_layout.app')

    @section('page-title')
        <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }} Account </h3>
    @endsection

@section('content')
<div>
    <?php
    //for btc
    $btcRate = file_get_contents('https://yobit.net/api/3/ticker/btc_usd');
    // convert to array
    $btcRate = json_decode($btcRate, true);
    //for eth
    $ethRate = file_get_contents('https://yobit.net/api/3/ticker/eth_usd');
    // convert to array
    $ethRate = json_decode($ethRate, true);
    //for tether
    $tetherRate = file_get_contents('https://yobit.net/api/3/ticker/usdt_usd');
    // convert to array
    $tetherRate = json_decode($tetherRate, true);
    ?>
</div>
<!-- section -->
<div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                        <h2><span class="theme_color"></span>Live Rates</h2>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-image">
                                    <thead>
                                        <tr>
                                            <th scope="col">Coin</th>
                                            <th scope="col">Buying Price</th>
                                            <th scope="col">Selling Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="w-25">
                                                <img src="{{ asset('assets/images/bitcoin.png') }}"
                                                    class="img-fluid img-thumbnail" alt="btc" height="90px"
                                                    width="90px">
                                            </td>
                                            <td>{{ $btcRate['btc_usd']['sell'] }}$</td>
                                            <td>{{ $btcRate['btc_usd']['buy'] }}$</td>
                                        </tr>
                                        <tr>
                                            <td class="w-25">
                                                <img src="{{ asset('assets/images/ethereum.png') }}"
                                                    class="img-fluid img-thumbnail" alt="btc" height="90px"
                                                    width="90px">
                                            </td>
                                            <td>{{ $ethRate['eth_usd']['sell'] }}$</td>
                                            <td>{{ $ethRate['eth_usd']['buy'] }}$</td>
                                        </tr>
                                        <tr>
                                            <td class="w-25">
                                                <img src="{{ asset('assets/images/tether.png') }}"
                                                    class="img-fluid img-thumbnail" alt="btc" height="90px"
                                                    width="90px">
                                            </td>
                                            <td>{{ $tetherRate['usdt_usd']['sell'] }}$</td>
                                            <td>{{ $tetherRate['usdt_usd']['buy'] }}$</td>
                                        </tr>
                                        @foreach ($admins as $admin)
                                        <tr>
                                            <td class="w-25">
                                                <img src="{{ asset('images/'.$admin->coinImage) }}" alt="{{ $admin->name }}"
                                                    class="img-fluid img-thumbnail" alt="btc" height="90px"
                                                    width="90px">
                                            </td>
                                            <td>{{ $admin->sellPrice }}$</td>
                                            <td>{{ $admin->buyPrice }}$</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
