@component('mail::message')
# Account Verification Request

Dear User, Your Account has been Verify Successfully.
Now you can Buy and Sell E-currency with No limits.

@component('mail::button', ['url' => 'https://instantflexy.com/user'])
View Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
