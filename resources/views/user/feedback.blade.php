@extends('user.user_layout.app')

@section('page-title')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>Welcome {{ auth()->user()->name }} <br> Logged in as: {{ auth()->user()->email }} <br> Account Status:
                    ({{ auth()->user()->account_type }}) </h3>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-white">Our Daily Transction Limit is (10$ to 1000$) for Unverified Account</p>
                    <p class="text-white">Our Daily Transction Limit is (Unlimited) for Verified Account</p>
                    <p class="text-white">Contact Us If Your Account is Rejected</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <h1 style="color: #ff880e;" class="text-center">Customer's Review</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @forelse ($reviews as $review)
                    <div class="jumbotron">
                        <h1>{{ $review->name }} give us {{ $review->stars }}</h1>
                        <hr>
                        <p class="lead">{{ $review->experience }}</p>
                        <hr class="my-4">
                        <p>{{ $review->created_at }}</p>
                    </div>
                @empty
                @endforelse
                {{-- pagination --}}
                {{ $reviews->links() }}
            </div>
            <div class="col-md-3">
                @include('user.user_layout.sideNav')
            </div>
        </div>
    </div>
@endsection
