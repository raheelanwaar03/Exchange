@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Admin Dashboard</h3>
@endsection

@section('content')
    <h1 style="color: #ff880e;" class="text-center">Buying E-Currency Request from Users </h1>

    <div class="container">
        <div class="d-flex justify-content-center align-items-centers">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="bg-warning">#</th>
                                <th class="bg-warning">Tranction REF</th>
                                <th class="bg-warning">Status</th>
                                <th class="bg-warning">Requested Amount</th>
                                <th class="bg-warning">E-Bank to Fund</th>
                                <th class="bg-warning">E-Bank Account No:</th>
                                <th class="bg-warning">E-Bank Account Name</th>
                                <th class="bg-warning">Date</th>
                                <th class="bg-warning">Fund You will Recevi</th>
                                <th class="bg-warning">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buyEcurrencies as $buyEcurrency)
                                <tr>
                                    <td>{{ $buyEcurrency->user_id }}</td>
                                    <td>{{ $buyEcurrency->transaction_id }}</td>
                                    <td>{{ $buyEcurrency->status }}</td>
                                    <td>{{ $buyEcurrency->buyingAmount }}</td>
                                    <td>{{ $buyEcurrency->e_bank }}</td>
                                    <td>{{ $buyEcurrency->account_number }}</td>
                                    <td>{{ $buyEcurrency->account_name }}</td>
                                    <td>{{ $buyEcurrency->created_at }}</td>
                                    <td>{{ $buyEcurrency->totalSellingPrice }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
