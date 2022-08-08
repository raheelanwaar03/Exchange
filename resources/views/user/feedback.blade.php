@extends('user.user_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }} Account </h3>
@endsection

@section('content')
    <h1 style="color: #ff880e;" class="text-center">Customer's Review</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($reviews as $review)
                    <div class="jumbotron">
                        <h1>{{ $review->name }} give us {{ $review->stars }}</h1>
                        <hr>
                        <p class="lead">{{ $review->experience }}</p>
                        <hr class="my-4">
                        <p>{{ $review->created_at }}</p>
                    </div>
                @endforeach
            </div>

            <div class="col-md-3">

                @include('user.user_layout.sideNav')

            </div>
        </div>
    </div>
@endsection
