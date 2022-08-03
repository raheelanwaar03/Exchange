@extends('layouts.app');

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @forelse ($news as $new)
                    <div class="jumbotron">
                        <h1 class="display-4">{{ $new->title }}</h1>
                        <p class="lead">{{ $new->description }}</p>
                        <hr class="my-4">
                        <p>{{ $new->created_at }}</p>
                    </div>
                @empty
                <div class="text-center m-5">
                    <h1>No Update Yet</h1>
                </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
