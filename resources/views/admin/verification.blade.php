@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Admin Dashboard</h3>
@endsection

@section('content')
    <h1 style="color: #ff880e;" class="text-center">User's Account Verification Request</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <table>
                    <thead class="table table-striped table-border">
                        <tr>
                            <th>#</th>
                            <th>Passport</th>
                            <th>NIN</th>
                            <th>Voter Card</th>
                            <th>Driver Lincenc</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userVerifications as $ver)
                            <tr>
                                <td>{{ $ver->id }}</td>
                                <td>{{ $ver->passport }}</td>
                                <td>{{ $ver->nin }}</td>
                                <td>{{ $ver->voterCard }}</td>
                                <td>{{ $ver->drivingLicence }}</td>
                                <td>{{ $ver->status }}</td>
                                <td>
                                    <a href="{{ route('admin.account.verification.verify',['id' => $ver->id]) }}" class="btn btn-success">verify</a>
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
