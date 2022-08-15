@component('mail::message')
# Buying Request Approvel

Congratulations! {{ auth()->user()->name }} Your buying request has been approved by Admin.

@component('mail::button', ['url' => 'https://instantflexy.com/user'])
Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
