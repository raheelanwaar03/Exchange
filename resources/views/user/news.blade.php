@extends('user.user_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }} Account </h3>
@endsection

@section('content')
    <h1 style="color: #ff880e;" class="text-center">News and Updates</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @forelse ($news as $news)
                <div class="jumbotron">
                    <h1>{{ $news->title }}</h1>
                    <p class="lead">{{ $news->description }}</p>
                    <hr class="my-4">
                </div>
                @empty
                    <h1 class="text-center">No News Yet</h1>
                @endforelse
            </div>

            <div class="col-md-3">

                @include('user.user_layout.sideNav')

            </div>
        </div>
    </div>
@endsection
