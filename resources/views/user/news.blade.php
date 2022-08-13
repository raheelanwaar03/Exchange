@extends('user.user_layout.app')

@section('page-title')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>Welcome {{ auth()->user()->name }} <br> Logged in as: {{ auth()->user()->email }} <br> Account Status:
                    ({{ auth()->user()->account_type }}) </h3>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-white">Our Daily Transction Limit is (50$ to 1000$) for Unverified Account</p>
                    <p class="text-white">Our Daily Transction Limit is (Unlimited) for Verified Account</p>
                    <p class="text-white">Contact Us If Your Account is Rejected</p>
                </div>
            </div>
        </div>
    </div>
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
                {{-- pagination --}}
                {{ $news->links() }}
            </div>

            <div class="col-md-3">

                @include('user.user_layout.sideNav')

            </div>
        </div>
    </div>
@endsection
