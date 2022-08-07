@component('mail::message')
# Decline Transaction

Hi {{auth()->user()->name}}, your Buying Transaction Request is declined.
Please Contact with Admin for more details.

@component('mail::button', ['url' => '/user'])
View Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
