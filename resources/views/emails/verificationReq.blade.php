@component('mail::message')
# Account Verification

Hi {{ auth()->user()->name }}, we have recived your account verification request.
We will notify you when your account is verified.

@component('mail::button', ['url' => 'https://instantflexy.com/user'])
View Dashboard
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
