@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
        </div>
    </div>
@endsection
