@component('mail::message')
# Selling E-currency Request

Hi Admin, You just got a request from {{ auth()->user()->name }} to sell E-currency.
Please Do your further action.

@component('mail::button', ['url' => '/admin/sellingRequest'])
View Request
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
