@component('mail::message')
# Tranction Complete

Hi {{auth()->user()->name}}, your tranction is completed.
Please check your account and visit our website for more Buying E-Currency.

@component('mail::button', ['url' => '/user'])
View Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
