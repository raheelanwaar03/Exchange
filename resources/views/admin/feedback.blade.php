@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Welcome {{ auth()->user()->name }} To Admin Dashboard <br> Logged in as: {{ auth()->user()->email }} <br> Account
        Status:
        ({{ auth()->user()->account_type }}) </h3>
@endsection

@section('content')
    <h1 style="color: #ff880e;" class="text-center">Customer Review</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($reviews as $review)
                    <div class="jumbotron">
                        <h1>{{ $review->name }} give us {{ $review->stars }}</h1>
                        <p class="lead">{{ $review->experience }}</p>
                        <hr class="my-4">
                        <p>{{ $review->created_at }}</p>
                        <hr>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg"
                                href="{{ route('admin.review.delete', ['id' => $review->id]) }}">Delete Review</a>
                        </p>
                    </div>
                @endforeach
                {{-- pagination --}}
                {{ $reviews->links() }}
            </div>
            <div class="col-md-3">
                @include('admin.admin_layout.sideNav')
            </div>
        </div>
    </div>
    </div>
@endsection
