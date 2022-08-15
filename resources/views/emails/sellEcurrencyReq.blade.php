@component('mail::message')
    # Selling Request

    Hi, {{ auth()->user()->name }} Your Selling Request has been Recived your refrence id is
    {{ $latestTransaction['transaction_id'] }}.

    Your Requested to sell {{ $latestTransaction['sellingAmount'] }} E-currency from Your
    {{ $latestTransaction['e_bank'] }} E-bank.

    You'r Provided Account Number is {{ $latestTransaction['account_number'] }} and Your Provided Account Name is
    {{ $latestTransaction['account_name'] }} Your Verified Email is {{ auth()->user()->email }}.

    We will notify you when Admin will approve your transaction request.Then you will transfer
    {{ $latestTransaction['sellingAmount'] }} E-currency to our given E-wallet Account and
    we will send you the payment of {{ $latestTransaction['totalBuyingPrice'] }} in Naira
    If your provided details are not correct, please contact us.

    @component('mail::button', ['url' => 'https://instantflexy.com/user'])
        View Dashboard
    @endcomponent
    Thanks,
    {{ config('app.name') }}
@endcomponent
