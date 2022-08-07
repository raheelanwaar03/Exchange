@component('mail::message')
# Account Verification Request

Hi {{ auth()->user()->name }}, Your Account has been Verify Successfully.
Now you can Buy and Sell E-currency with No limits.

@component('mail::button', ['url' => '/admin/account/verification'])
View Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
