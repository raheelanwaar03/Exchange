@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Admin Dashboard</h3>
@endsection

@section('content')
    <h1 style="color: #ff880e;" class="text-center">Selling E-Currency Request from Users </h1>

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
                                <th class="bg-warning">You Send</th>
                                <th class="bg-warning">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sellEcurrencys as $sellEcurrency)
                                <tr>
                                    <td>{{ $sellEcurrency->id }}</td>
                                    <td>{{ $sellEcurrency->transaction_id }}</td>
                                    <td>{{ $sellEcurrency->status }}</td>
                                    <td>{{ $sellEcurrency->sellingAmount }}</td>
                                    <td>{{ $sellEcurrency->e_bank }}</td>
                                    <td>{{ $sellEcurrency->account_number }}</td>
                                    <td>{{ $sellEcurrency->account_name }}</td>
                                    <td>{{ $sellEcurrency->seller_email }}</td>
                                    <td>{{ $sellEcurrency->created_at }}</td>
                                    <td>{{ $sellEcurrency->totalBuyingPrice }}</td>
                                    <td class="d-flex"> <a
                                            href="{{ route('admin.sellingRequest.completeSell', ['id' => $sellEcurrency->id]) }}"
                                            class="btn btn-sm btn-success">Complete</a>
                                        <a href="{{ route('admin.sellingRequest.declineSell', ['id' => $sellEcurrency->id]) }}"
                                            class="btn btn-sm btn-danger">Decline</a>
                                        <a href="{{ route('admin.sellingRequest.approveSell', ['id' => $sellEcurrency->id]) }}"
                                            class="btn btn-sm btn-warning">Approve</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $sellEcurrencys->links() }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
