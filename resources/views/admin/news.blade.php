@extends('admin.admin_layout.app')

@section('page-title')
    <h3>News & Updates</h3>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-title">
                        <h1 style="color: #FF890E" class="card-title text-center">Admin Add News & Updates</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.newSaving') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="new">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Title">
                            <label for="new">Description</label>
                            <textarea name="description" class="form-control" placeholder="Enter Description"></textarea>
                            <button type="submit" class="btn-yellow">Add News</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    @foreach ($news as $news)
                        <div class="card-body">
                            <div class="card-title">
                                <h1 style="color: #FF890E" class="card-title text-center">{{ $news->title }}</h1>
                            </div>
                            <div class="card-text">
                                <p>{{ $news->description }}</p>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
