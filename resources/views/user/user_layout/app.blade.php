@include('user.user_layout.navigation')

@yield('content')

<div class="whatsapp">
    <a href="https://app.whatsapp.com/send?phone={{ env('APP_Phone2') }}" target="_blank"><img src="{{ asset('assets/images/whatsapp.png') }}" alt="whats app logo" width="50px" height="50px"></a>
</div>

@include('user.user_layout.footer')
