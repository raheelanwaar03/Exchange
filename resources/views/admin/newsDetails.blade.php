@extends('admin.admin_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Admin Dashboard</h3>
@endsection

@section('content')
    <h1 style="color: #ff880e;" class="text-center">News and Updates</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($news as $news)
                    <div class="jumbotron">
                        <h1 class="display-4">{{ $news->title }}</h1>
                        <p class="lead">{{ $news->description }}</p>
                        <hr class="my-4">
                    </div>
                @endforeach
            </div>
            <div class="col-md-3">

                @include('admin.admin_layout.sideNav')

            </div>
        </div>
    </div>
@endsection
