@component('mail::message')
# Decline Transaction

Hi Dear User, your Buying Transaction Request is declined.
Please Contact with Admin for more details.

@component('mail::button', ['url' => 'https://instantflexy.com/user'])
View Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
