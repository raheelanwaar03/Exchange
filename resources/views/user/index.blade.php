@extends('user.user_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }} Account </h3>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">

                <!-- section -->
                <div class="section layout_padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="full">
                                    <div class="heading_main text_align_center">
                                        <h2><span class="theme_color"></span>Transaction History</h2>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table table-image">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Ref</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Paid?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @foreach ($admins as $admin)
                                                            <tr>
                                                                <td class="w-25">
                                                                    <img src="{{ asset('images/' . $admin->coinImage) }}"
                                                                        alt="{{ $admin->name }}"
                                                                        class="img-fluid img-thumbnail" alt="btc"
                                                                        height="90px" width="90px">
                                                                </td>
                                                                <td>₦{{ $admin->buyPrice }}</td>
                                                                <td>₦{{ $admin->sellPrice }}</td>
                                                            </tr>
                                                        @endforeach --}}
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
            <div class="col-md-2">
                @include('user.user_layout.sideNav')
            </div>
        </div>
    </div>
    </div>
@endsection
