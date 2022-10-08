@component('mail::message')
# Buying Request Approvel

Congratulations Dear User! Your buying request has been approved by Admin.

@component('mail::button', ['url' => 'https://instantflexy.com/user'])
Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
