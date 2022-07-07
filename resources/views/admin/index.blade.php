@extends('admin.admin_layout.app');

@section('content')
    <h1>Hi {{ auth()->user()->name }} to Admin-Panel</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
@endsection

