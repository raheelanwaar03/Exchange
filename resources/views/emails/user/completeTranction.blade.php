@component('mail::message')
# Tranction Complete

Hi Dear User, your tranction is completed.
Please check your account and visit our website for more Buying E-Currency.

@component('mail::button', ['url' => 'https://instantflexy.com/user'])
Give Feedback
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
