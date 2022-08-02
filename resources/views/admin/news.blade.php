@extends('admin.admin_layout.app')

@section('page-title')
    <h3>News & Updates</h3>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-title">
                        <h1 style="color: #FF890E" class="card-title text-center">Admin Add News & Updates</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.newSaving') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="new">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label for="new">Description</label>
                                <textarea name="description" class="form-control" cols="10" rows="10" placeholder="Enter Description"></textarea>
                            </div>
                            <button type="submit" class="btn-yellow">Add News</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                @include('admin.admin_layout.sideNav')
            </div>
        </div>
    </div>
@endsection
