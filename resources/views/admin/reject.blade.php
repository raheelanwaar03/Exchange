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
                <h1 style="color: #ff880e;" class="text-center">All Rejected Users From Verification</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped table-border">
                    <thead>
                        <tr>
                            <th>Account Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('admin.account.verification.verify', ['id' => $user->id]) }}"
                                        class="btn btn-success">Verify</a>
                                    <a href="{{ route('admin.unverified.accounts', ['id' => $user->id]) }}"
                                        class="btn btn-danger">Unverify</a>
                                </td>
                            </tr>
                        @endforeach
                        {{-- pagination --}}
                        {{-- {{ $users->links() }} --}}
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                @include('admin.admin_layout.sideNav')
            </div>
        </div>
    </div>
@endsection
