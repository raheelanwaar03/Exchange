@component('mail::message')
# Tranction Complete

Hi Dear User, your tranction is completed.
Please check your account and visit our website for more selling.

@component('mail::button', ['url' => 'https://instantflexy.com/user'])
View Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
