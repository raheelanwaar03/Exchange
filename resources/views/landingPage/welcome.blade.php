@extends('layouts.app')

@section('content')

    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span>Live Rates</h2>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-image">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">E-Currency</th>
                                                <th scope="col">Buying Price</th>
                                                <th scope="col">Selling Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($admins as $admin)
                                                <tr>
                                                    <td>{{ $admin->id }}</td>
                                                    <td>{{ $admin->coinName }}</td>
                                                    <td class="w-25">
                                                        <img src="{{ asset('images/' . $admin->coinImage) }}"
                                                            alt="{{ $admin->name }}" class="img-fluid img-thumbnail"
                                                            alt="btc" height="90px" width="90px">
                                                    </td>
                                                    <td>₦{{ $admin->buyPrice }}</td>
                                                    <td>₦{{ $admin->sellPrice }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heading_main text_align_center">
                        <h2><span class="theme_color"></span>News & Updates</h2>
                    </div>
                    <div class="card" style="width: 18rem;">
                        @foreach ($news as $new)
                            <div class="card-body">
                                <h3 class="card-title">{{ $new->title }}</h3>
                                <p class="card-text">{{ $new->description }}</p>
                                {{-- <a href="https://www.telegram.com" target="_blank" class="btn btn-primary">Read More</a> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
