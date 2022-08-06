@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Admin Dashboard</h3>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="color: #ff880e;" class="text-center">All Rejected Users for verification</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <table>
                    <thead class="table table-striped table-border">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Account Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                </td>
                                <td>
                                    {{ $user->account_type }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.account.verification.verify', ['id' => $user->id]) }}"
                                        class="btn btn-success">Verify</a>
                                    <a href="{{ route('admin.account.verification.unverify', ['id' => $user->id]) }}"
                                        class="btn btn-danger">Unverify</a>
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
