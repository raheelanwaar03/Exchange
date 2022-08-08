@component('mail::message')
# Selling Request

Hi, {{ auth()->user()->name }} Your Selling Request has been Recived.
We will notify you when it completed.


@component('mail::button', ['url' => 'https://instantflexy.com/user'])
View Dashboard
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
