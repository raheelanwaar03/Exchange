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
                                        <h2><span class="theme_color"></span>Buying History</h2>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table table-image">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Ref</th>
                                                        <th scope="col">E-Bank</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach ($buyEcurrencys as $buyEcurrency)
                                                      <tr>
                                                            <td>{{ $buyEcurrency->transaction_id }}</td>
                                                            <td>{{ $buyEcurrency->e_bank }}</td>
                                                            <td>{{ $buyEcurrency->buyingAmount }}</td>
                                                            <td>{{ $buyEcurrency->created_at }}</td>
                                                            <td>{{ $buyEcurrency->status }}</td>
                                                      </tr>
                                                  @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- User selling History --}}
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="full">
                                        <div class="heading_main text_align_center">
                                            <h2><span class="theme_color"></span>Selling History</h2>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-image">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Ref</th>
                                                            <th scope="col">E-Bank</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      @foreach ($sellEcurrencys as $sellEcurrency)
                                                          <tr>
                                                                <td>{{ $sellEcurrency->transaction_id }}</td>
                                                                <td>{{ $sellEcurrency->e_bank }}</td>
                                                                <td>{{ $sellEcurrency->buyingAmount }}</td>
                                                                <td>{{ $sellEcurrency->created_at }}</td>
                                                                <td>{{ $sellEcurrency->status }}</td>
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

            </div>
            <div class="col-md-2">
                @include('user.user_layout.sideNav')
            </div>
        </div>
    </div>
    </div>
@endsection
