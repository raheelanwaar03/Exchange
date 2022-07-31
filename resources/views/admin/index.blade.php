@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Admin Dashboard Your Account Type is {{ auth()->user()->account_type }}</h3>
@endsection

@section('content')
    <h1 style="color: #ff880e;" class="text-center">All Coins Rates</h1>

    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-around">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="bg-warning" scope="col">#</th>
                                <th class="bg-warning" scope="col">E-currency Name</th>
                                <th class="bg-warning" scope="col">E-currency Image</th>
                                <th class="bg-warning" scope="col">E-Bank Details</th>
                                <th class="bg-warning" scope="col">Buy Price</th>
                                <th class="bg-warning" scope="col">Sell Price</th>
                                <th class="bg-warning" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                                <tr>
                                    <th scope="row">{{ $admin->id }}</th>
                                    <td>{{ $admin->coinName }}</td>
                                    <td><img src="{{ asset('images/' . $admin->coinImage) }}" alt="{{ $admin->coinName }}"
                                            height="90px" width="90px" class="img-fluid img-thumbnail"></td>
                                    <td>{{ $admin->e_bank }}</td>
                                    <td>₦{{ $admin->buyPrice }}</td>
                                    <td>₦{{ $admin->sellPrice }}</td>
                                    <td>
                                        <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-dark">Edit</a>
                                        <form action="{{ route('admin.destroy', $admin->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @include('admin.admin_layout.sideNav')
                </div>
            </div>
        </div>

    </div>
@endsection
