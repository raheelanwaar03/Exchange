@extends('user.user_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }} Account </h3>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-3">

                <table class="table-bordered w-100">
                    {{-- get the details of transcation for user confirmation --}}
                    <tr>
                        <th>
                            <h5>Transaction ID</h5>
                        </th>
                        <td>
                            <h5>{{ $buyEcurrency->transaction_id }}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h5>Requested Amount</h5>
                        </th>
                        <td>
                            <h5>${{ $buyEcurrency->buyingAmount }}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h5>Account to be funded</h5>
                        </th>
                        <td>
                            <h5>{{ $buyEcurrency->e_bank }}</h5>
                            <h5>{{ $buyEcurrency->account_number }}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h5>Your Total Payment</h5>
                        </th>
                        <td>
                            <h5>₦00.00</h5>
                        </td>
                    </tr>
                </table>

            </div>
            <div class="col-md-2">
                @include('user.user_layout.sideNav')
            </div>
        </div>
    </div>
    </div>
@endsection
