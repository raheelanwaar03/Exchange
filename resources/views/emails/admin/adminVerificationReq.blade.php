@component('mail::message')
# Admin Verification Request

Hi Admin, you just got a request from {{ auth()->user()->name }} to verify his account.
Please Do your further action.

@component('mail::button', ['url' => '/admin/account/verification'])
View Request
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
