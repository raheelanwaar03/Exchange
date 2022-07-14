@extends('user.user_layout.app');

    @section('page-title')
        <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }}</h3>
    @endsection

@section('content')
     <h1>hy</h1>
@endsection
