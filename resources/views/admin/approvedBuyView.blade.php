@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Admin Dashboard</h3>
@endsection

@section('content')
<div class="d-flex justify-content-around align-items-center">
    <h1 style="color: #ff880e;" class="text-center">Approved Selling E-Currency Request of Users </h1>
    <a href="{{ route('admin.buyingRequest.completeBuyView') }}" class="join_bt">Completed SellTran..</a>
</div>
    <div class="container">
        <div class="d-flex justify-content-center align-items-centers">
            <div class="row">
                <div class="col-md-10">
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
                            @foreach ($sellEcurrencys as $sellEcurrency)
                                <tr>
                                    <td>{{ $sellEcurrency->id }}</td>
                                    <td>{{ $sellEcurrency->status }}</td>
                                    <td>{{ $sellEcurrency->sellingAmount }}</td>
                                    <td>{{ $sellEcurrency->seller_email }}</td>
                                    <td>{{ $sellEcurrency->created_at }}</td>
                                    <td class="d-flex"> <a
                                            href="{{ route('admin.sellingRequest.completeSell', ['id' => $sellEcurrency->id]) }}"
                                            class="btn btn-sm btn-success">Complete</a>
                                        <a href="{{ route('admin.sellingRequest.declineSell', ['id' => $sellEcurrency->id]) }}"
                                            class="btn btn-sm btn-danger">Decline</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $sellEcurrencys->links() }}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3">
                @include('admin.admin_layout.sideNav')
            </div>
        </div>
    </div>
@endsection
