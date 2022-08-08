@component('mail::message')
# Decline Sell Tranction

Hi {{auth()->user()->name}}, your Selling tranction Request is declined.
Please Contact with Admin for more details.

@component('mail::button', ['url' => 'https://instantflexy.com/user'])
View Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
