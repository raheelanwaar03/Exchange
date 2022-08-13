@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Welcome {{ auth()->user()->name }} To Admin Dashboard <br> Logged in as: {{ auth()->user()->email }} <br> Account
        Status:
        ({{ auth()->user()->account_type }}) </h3>
@endsection

@section('content')
    <h1 style="color: #ff880e;" class="text-center">All User's</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Account Type</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->account_type }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{-- paginate the table --}}
                <div class="mx-auto pb-10">
                    {{ $users->links() }}
                </div>
            </div>
            <div class="col-md-3">
                @include('admin.admin_layout.sideNav')
            </div>
        </div>
    </div>
@endsection
