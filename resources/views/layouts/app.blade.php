@include('layouts.navigation')

@yield('content')

<div class="whatsapp">
    <a href="https://web.whatsapp.com/send?phone={{ env('APP_Phone2') }}" target="_blank"><img src="{{ asset('assets/images/whatsapp.png') }}" alt="whats app logo" width="50px" height="50px"></a>
</div>

@include('layouts.footer')
