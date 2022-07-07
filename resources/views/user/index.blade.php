@extends('user.user_layout.app');

@section('content')
    <h1>Hi {{ auth()->user()->name }} to User-Panel</h1>
@endsection
