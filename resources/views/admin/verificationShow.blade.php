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
                <h1 style="color: #ff880e;" class="text-center">User's Account's Details</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
               <div class="jumbotron">
                <h3>Method: {{ $userVerification->method }}</h3>
                <h4>Front Image</h4>
                <img src="{{ asset('images/' . $userVerification->front_side) }}" alt="front_img"  height="90px" width="90px">
                <h4>Back Image</h4>
                <img src="{{ asset('images/' . $userVerification->back_side) }}" alt="front_img"  height="90px" width="90px">
               </div>
            </div>
            <div class="col-md-3">
                @include('admin.admin_layout.sideNav')
            </div>
        </div>
    </div>
@endsection
