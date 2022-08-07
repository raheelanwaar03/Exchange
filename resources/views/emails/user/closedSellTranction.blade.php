@component('mail::message')
# Tranction Closed

Hi {{auth()->user()->name}}, your tranction is closed.
Please Contact us for any further queries.

@component('mail::button', ['url' => '/user'])
View Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
