@include('layouts.navigation')

@yield('content')

<div class="whatsapp">
    <a href="https://web.whatsapp.com/send?phone={{ env('APP_Phone2') }}" target="_blank"><img
            src="{{ asset('assets/images/whatsapp.png') }}" alt="whats app logo" width="50px" height="50px"></a>
</div>

<div class="button_a1a3" style="background: rgb(68, 187, 110);">
    <div class="iconWrap_f760">
        <div class="envelopeIcon_a48c icons_f8f0"
            style="background-image: url(&quot;data:image/svg+xml,%3Csvg%20width%3D%2225%22%20height%3D%2220%22%20viewBox%3D%220%200%2025%2020%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20fill%3D'%23fff'%20d%3D%22M22.5%205l-10%206.25L2.5%205V2.5l10%206.25%2010-6.25V5zm0-5h-20A2.49%202.49%200%200%200%200%202.5v15A2.5%202.5%200%200%200%202.5%2020h20a2.5%202.5%200%200%200%202.5-2.5v-15A2.5%202.5%200%200%200%2022.5%200z%22%2F%3E%3C%2Fsvg%3E%0A&quot;);">
        </div>
    </div>
</div>


@include('layouts.footer')
