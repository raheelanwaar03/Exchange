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
                                <th class="bg-warning">REF</th>
                                <th class="bg-warning">Status</th>
                                <th class="bg-warning">Amount</th>
                                <th class="bg-warning">E-Bank Name</th>
                                <th class="bg-warning">E-Account No:</th>
                                <th class="bg-warning">E-Account Name</th>
                                <th class="bg-warning">Email</th>
                                <th class="bg-warning">Date</th>
                                <th class="bg-warning">You Received</th>
                                <th class="bg-warning">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buyEcurrencies as $buyEcurrency)
                                <tr>
                                    <td>{{ $buyEcurrency->id }}</td>
                                    <td>{{ $buyEcurrency->transaction_id }}</td>
                                    <td>{{ $buyEcurrency->status }}</td>
                                    <td>{{ $buyEcurrency->buyingAmount }}</td>
                                    <td>{{ $buyEcurrency->e_bank }}</td>
                                    <td>{{ $buyEcurrency->account_number }}</td>
                                    <td>{{ $buyEcurrency->account_name }}</td>
                                    <td>{{ $buyEcurrency->buyer_Email }}</td>
                                    <td>{{ $buyEcurrency->created_at }}</td>
                                    <td>{{ $buyEcurrency->totalSellingPrice }}</td>
                                    <td class="d-flex"> <a
                                            href="{{ route('admin.buyingRequest.complete', ['id' => $buyEcurrency->id]) }}"
                                            class="btn btn-sm btn-success">Complete</a>
                                        <a href="{{ route('admin.buyingRequest.decline', ['id' => $buyEcurrency->id]) }}"
                                            class="btn btn-sm btn-danger">Decline</a>
                                        <a href="{{ route('admin.buyingRequest.approveBuy', ['id' => $buyEcurrency->id]) }}"
                                            class="btn btn-sm btn-warning">Approve</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $buyEcurrencies->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
