@component('mail::message')
# Tranction Complete

Hi {{auth()->user()->name}}, your tranction is completed.
Please check your account and visit our website for more selling.

@component('mail::button', ['url' => '/sell'])
View Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
