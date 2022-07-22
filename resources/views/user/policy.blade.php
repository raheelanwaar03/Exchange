@extends('user.user_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }} Account </h3>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center" style="color:#FF890E">Terms & Conditions
                    <hr style="width: 400px"; color="#FF890E">
                </h1>
                <p>

                    <b>1.0</b> “We” refers to {{ env('APP_NAME') }} (a website owned by Instantflexy & Tech Limited) and
                    “You” refers to
                    anyone using the service of {{ env('APP_NAME') }}.
                    <br>
                    <br>
                    <b>1.1</b> We are not a financial institution and we are not a subsidiary of any e-payment system that
                    we deal
                    in.
                    <br>
                    <br>
                    <b>1.2</b> We are an Independent E-currency Exchange Service Provider.
                    <br>
                    <br>
                    <b>1.3</b> We offer our services to only Nigerians resident in Nigeria or abroad.
                    <br>
                    <br>
                    <b>1.4</b> Our service is available to registered and verified customers only. Any deposit made to our
                    bank
                    account without following due process as contain in the users member area will not be treated. Such
                    customer will be forced to register and verify an iGN account before funding. We may not refund, Please
                    be informed!
                    <br>
                    <br>
                    <b>1.5</b> All transactions are made through our bank accounts listed on the account funding page which
                    is only
                    visible to the verified customers only. Alternatively, customer may choose to visit our office to make a
                    card or cash deposit.
                    <br>
                    <br>
                    <b>1.5</b> For obvious security reasons, we do not provide our E-currency account numbers on this
                    website.
                    Customer willing to spend his/her E-currency to us is required to follow the instruction as contained in
                    the user member area.
                    <br>
                    <br>
                    <b>1.7</b> You are responsible for supplying your correct E-currency account number. In the event that
                    your
                    fund is sent to a wrong account because you supplied a wrong account number, we will not be liable for
                    any loss you may incur.
                    <br>
                    <br>
                    <b>1.8</b> You will not use our services for money laundering or fraud activities.
                    <br>
                    <br>
                    <b>1.9</b> We will keep records of all transactions and we will make them available to relevant
                    authorities
                    when necessary.
                    <br>
                    <br>
                    <b>2.0</b> We respect the privacy of our clients and will not share your information with anybody.
                    <br>
                    <br>
                    <b>2.1</b> All transactions are concluded within 0 - 24 hours. If there is any delay in your account
                    funding or
                    withdrawal, you will get in touch with our support department on the contact information listed on our
                    contact page.
                    <br>
                    <br>
                    <b>2.2</b> In the case you are spending your E-currency to us. We pay into your bank account the
                    equivalent
                    amount of the E-currency we receive in our account. The reduction in the amount paid into your bank
                    account is due to the receiving fee the payment processor charge on all transactions.
                    <br>
                    <br>
                    <b>2.3</b> We pay cash for the exact amount of the E-currency amount we receive into our E-currency
                    account.
                    Please take notice of this, you are the one to bear the receiving fund fee at a particular time you make
                    a spend to us.
                    <br>
                    <br>
                    <b>2.4</b> In the event that your withdrawal was suspended, returned and/or cancelled by the money
                    processor
                    for any reason. You are bound to make a full refund of any cash received from us.
                    <br>
                    <br>
                    <b>2.5</b> E-currency funding is final. You can not request a refund of your money once your e-currency
                    account
                    has been funded.
                    <br>
                    <br>
                    <b>2.6</b> Bank Account funding is final. You can not request a refund of your E-currency once your Bank
                    account has been deposited otherwise you will need to place a buying order to the company again.
                    <br>
                    <br>
                    <b>2.7</b> We reserve the right to change the price of any of our products buy posting the information
                    on our
                    website. Note that a mail may not be sent to a customer for any changes in the price.
                    <br>
                    <br>
                    <b>2.8</b> We reserve the right to amend these terms and conditions at any time.
                    <br>
                    <br>
                    <b>2.9</b> By using any of our services, you agree to be bound by these terms as stated here.
                    <br>
                    <br>
                    <b>2.10</b> We reserve the right to change the terms and conditions at any time.
                    <br>
                    <br>
                    Signed.
                    <br>
                    <br>
                    Management
                    {{ env('APP_NAME') }} team.
                </p>
            </div>
            <div class="col-md-2">

                @include('user.user_layout.sideNav')

            </div>
        </div>
    </div>
@endsection
