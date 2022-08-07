@component('mail::message')
# Buying Request

Hi, {{auth()->user()->name}} We have received your request to buy E-currency.
When It is approved, you will be notified.


{{-- send user to his dasboard --}}

@component('mail::button', ['url' => '/user'])
View Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
