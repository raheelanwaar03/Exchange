@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Welcome {{ auth()->user()->name }} To Admin Dashboard <br> Logged in as: {{ auth()->user()->email }} <br> Account
        Status:
        ({{ auth()->user()->account_type }}) </h3>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="color: #ff880e;" class="text-center">User's Account Verification Request</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <table>
                    <thead class="table table-striped table-border">
                        <tr>
                            <th>Account Id</th>
                            <th>Method</th>
                            <th>Front</th>
                            <th>Back</th>
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
                {{ $userVerifications->links() }}
            </div>
            <div class="col-md-3">
                @include('admin.admin_layout.sideNav')
            </div>
        </div>
    </div>
@endsection
