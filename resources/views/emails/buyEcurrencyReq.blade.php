@component('mail::message')
    # Buying Request

    Hi, {{ auth()->user()->name }} We have received your request to buy E-currency your reference id is
    {{ $latestTransaction['transaction_id'] }}.

    You requested for buying {{ $latestTransaction['buyingAmount'] }} E-currency for Your {{ $latestTransaction['e_bank'] }}
    E-bank.

    You'r Provided Account Number is {{ $latestTransaction['account_number'] }} and Your Provided Account Name is
    {{ $latestTransaction['account_name'] }} Your Verified Email is {{ auth()->user()->email }}.

    When Admin will approve your transction, you will be notified.Then send us the payment
    {{ $latestTransaction['totalSellingPrice'] }} in Naira.So we will transfer your E-currency to {{ $latestTransaction['e_bank'] }}'s {{ $latestTransaction['account_number'] }}.

    If your provided details are not correct, please contact us.

    @component('mail::button', ['url' => 'https://instantflexy.com/user'])
        View Dashboard
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
