@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @forelse ($reviews as $review)
                <div class="jumbotron">
                    <h1>{{ $review->name }} give us {{ $review->stars }}</h1>
                    <hr>
                    <p class="lead">{{ $review->experience }}</p>
                    <hr class="my-4">
                    <p>{{ $review->created_at }}</p>
                </div>
                @empty
                   <h1>No Reviews yet</h1>
                @endforelse

            </div>
        </div>
    </div>
@endsection
