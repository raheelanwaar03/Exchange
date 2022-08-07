@component('mail::message')
# Introduction

Hi {{ auth()->user()->name }}, Your Account has been Verify Successfully.
Now you can Buy and Sell E-currency with No limits.

@component('mail::button', ['url' => '{{ route('user.index') }}'])
View Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
