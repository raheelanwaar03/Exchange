@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Admin Dashboard</h3>
@endsection

@section('content')
    <h1 style="color: #ff880e;" class="text-center">User's Account Verification Request</h1>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-9">
                <table>
                    <thead class="table table-striped table-border">
                        <tr>
                            <th>#</th>
                            <th>Method</th>
                            <th>Front</th>
                            <th>Back</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userVerifications as $ver)
                            <tr>
                                <td>{{ $ver->id }}</td>
                                <td>{{ $ver->method }}</td>
                                <td>
                                    <img src="{{ asset('images/' . $ver->front_side) }}" alt="{{ $ver->front_side }}"
                                        height="90px" width="90px" class="img-fluid img-thumbnail">
                                </td>
                                <td>
                                    <img src="{{ asset('images/' . $ver->back_side) }}" alt="{{ $ver->back_side }}"
                                        height="90px" width="90px" class="img-fluid img-thumbnail">
                                </td>
                                <td>{{ $ver->status }}</td>
                                <td>
                                    <a href="{{ route('admin.account.verification.verify', ['id' => $ver->id]) }}"
                                        class="btn btn-success">Verify</a>
                                    <a href="{{ route('admin.account.verification.reject', ['id' => $ver->id]) }}"
                                        class="btn btn-danger">Reject</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                @include('admin.admin_layout.sideNav')
            </div>
        </div>
    </div>
@endsection