@component('mail::message')
    # Selling Request Approval

    Congratulations! {{ auth()->user()->name }} Your selling request has been approved by Admin.
    Visit {{ config('app.name') }} dashboard to see the details.
    @component('mail::button', ['url' => 'https://instantflexy.com/user'])
        Dashboard
    @endcomponent
    Thanks,
    {{ config('app.name') }}
@endcomponent
