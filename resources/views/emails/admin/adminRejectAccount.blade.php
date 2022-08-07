@component('mail::message')
# Account Rejection

Hi {{ auth()->user()->name }}, Your Account Verification Request has been rejected.
You did not meet the requirements to be Verified.
Contact with Admin for more details.

@component('mail::button', ['url' => '/user'])
Verify Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
