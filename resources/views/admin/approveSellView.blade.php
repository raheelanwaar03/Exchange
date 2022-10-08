@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Admin Dashboard</h3>
@endsection

@section('content')
<div class="d-flex justify-content-around align-items-center">
    <h1 style="color: #ff880e;" class="text-center">Approved Selling E-Currency Request from Users </h1>
    <a href="{{ route('admin.sellingRequest.completeSellView') }}" class="join_bt">Completed SellTran..</a>
</div>

    <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="bg-warning">#</th>
                                <th class="bg-warning">Status</th>
                                <th class="bg-warning">Amount</th>
                                <th class="bg-warning">Email</th>
                                <th class="bg-warning">Date</th>
                                <th class="bg-warning">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buyEcurrencys as $buyEcurrency)
                                <tr>
                                    <td>{{ $buyEcurrency->id }}</td>
                                    <td>{{ $buyEcurrency->status }}</td>
                                    <td>{{ $buyEcurrency->buyingAmount }}</td>
                                    <td>{{ $buyEcurrency->buyer_Email }}</td>
                                    <td>{{ $buyEcurrency->created_at }}</td>
                                    <td class="d-flex"> <a
                                            href="{{ route('admin.buyingRequest.complete', ['id' => $buyEcurrency->id]) }}"
                                            class="btn btn-sm btn-success">Complete</a>
                                        <a href="{{ route('admin.buyingRequest.decline', ['id' => $buyEcurrency->id]) }}"
                                            class="btn btn-sm btn-danger">Decline</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $buyEcurrencys->links() }}
                </div>
                <div class="col-md-3">
                    @include('admin.admin_layout.sideNav')
                </div>
            </div>
    </div>
@endsection
