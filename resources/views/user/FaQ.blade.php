@extends('user.user_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }} Account </h3>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12">
                    <h1 class="text-center" style="color:#FF890E">Most Frequently Asked Questions
                        <hr style="width: 400px"; color="#FF890E">
                    </h1>
                </div>
                <div class="col-md-12">
                    <h4>How does the Website Work?</h4>
                    <p>Firstly, you need to create an {{ env('APP_NAME') }} account to use this website for the purpose of
                        buying and selling
                        e-currency. You can do this by navigating to the Sign Up page section of the website.</p>
                </div>
                <div class="col-md-12">
                    <h4>Can I use my account immeditaly?</h4>
                    <p>Yes, you can start using your account to fund and withdraw immediately. However, there is a funding
                        limit
                        of $500 per day, applicable to UN-VERIFIED accounts. No limitation on withdrawals. To get your
                        account
                        verified, you need to upload your ID showing your full name and a utility bill showing your address.
                    </p>
                </div>
                <div class="col-md-12">
                    <h4>How long does it take to verify my account?</h4>
                    <p>After uploading your valid ID and an acceptable utility bill, verification usually takes 24 - 48hrs
                        (Monday - Saturday). If you receive no response after 48hrs, please Contact our support team through
                        any
                        of the channels listed at the Contact Us page..</p>
                </div>
                <div class="col-md-12">
                    <h4>My account is not verified after 48 hours what should I do?</h4>
                    <p>Check that you have not received a response from us about the reason for this, by checking your email
                        inbox. You may need to check your spam folder too. If no response has been received, you will need
                        to
                        write us on {{ env('APP_Email') }} assistance or you can what's up us during the working hour.</p>
                </div>
                <div class="col-md-12">
                    <h4>Do I need to verify my account to sell my E-currency to your company?</h4>
                    <p>No. Withdrawing your e-currency or selling it to us does not require any verification. We assume AML
                        policy still holds since you will be accepting cash into your own very bank account. However, your
                        banking details must match the name on your profile (name supplied during the registration). So, you
                        can
                        register and sell your e-currency to us immediately after registration.</p>
                </div>
                <div class="col-md-12">
                    <h4>what in the minimum and maximum withdrwal per transation?</h4>
                    <p>Minimum amount you can sell or withdraw through us for any e-currency is $20 but no maximum.</p>
                </div>
                <div class="col-md-12">
                    <h4>Can I withdraw into my dollar(domicilary) account?</h4>
                    <p>Occassionally, we allow this for withdrawal starting from $5,000 with a fee of 5% of the total amount
                        of
                        e-currency withdrawn. Customer needs to communicate with us about this prior to withdrawal. We can
                        be
                        reached on the contact details listed at the Contact page.</p>
                </div>
                <div class="col-md-12">
                    <h4>what in the minimum and maximum funding per transation?</h4>
                    <p>Minimum amount you can fund/buy through us for any e-currency is $20 but no maximum.</p>
                </div>
                <div class="col-md-12">
                    <h4>what is the transaction number?</h4>
                    <p>Transaction number or a reference number, both mean the same. From inside your iGN account, what you
                        will
                        see is a REF which is a particular Transaction reference or number. It is a unique 6 digits code for
                        a
                        particular transaction, either a funding or withdrawal and its very important to quote this number
                        to
                        our staff anytime you are requesting a help via email or on phone.</p>
                </div>
                <div class="col-md-12">
                    <h4>How long does it takes you to fund my e-currency account after deposit?</h4>
                    <p>We try our best to make this instant but on some rare occassions, funding maybe extended to 24hrs.
                        Customers should be aware that sometimes it takes bank hours to get funds settled into our bank
                        accounts
                        for some reasons or there may be transactions in queue at our desk which need to be attended before
                        yours. We urge customers to wait for at least 5hrs after deposit before submitting any complaint of
                        funding.</p>
                </div>
                <div class="col-md-12">
                    <h4>I just made a withdrawal, how does it take you to deposite my bank account?</h4>
                    <p>We offer same day withdrawal but sometimes this maybe extended to 24hrs (Monday � Sunday). Note that
                        your
                        bank account may be deposited at the evening time.</p>
                </div>
                <div class="col-md-12">
                    <h4>Can I have more than one {{ env('APP_NAME') }} account?</h4>
                    <p>No, we encourage a single account per customer only. This is to prevent duplicate and redundant
                        accounts
                        and to prevent money laundering. Customers are advised to verify their account so that they will be
                        able
                        to fund any amount without limitation. Also, customer can fund countless of e-currency account
                        numbers
                        per day.</p>
                </div>
                <div class="col-md-12">
                    <h4>Can I pay cash to your office?</h4>
                    <p>Yes, you can pop into any of our offices near you to make a cash deposit or savely use the point of
                        sales
                        terminer (POS) to topup your wallets and have your account funded while you wait.</p>
                </div>
                <div class="col-md-12">
                    <h4>what are your working or support hour?</h4>
                    <p>We work 8:00am to 6:00pm (Monday - Friday) and 10:00am � 4:00pm (Saturday) and at our Managers free
                        time
                        on Sundays. Our Support phone and live chat are available during the working hours of Monday �
                        Saturday
                        only. However, our managers work with email during the other days and hours so you can have your buy
                        or
                        sell orders attended even outside the mentioned hours.</p>
                </div>
                <div class="col-md-12">
                    <h4>My question is not answered here. What should I Do?</h4>
                    <p>Use either live chat, phone calls or email to reach our support team during the working hours or
                        reach us
                        for further assistance by visiting our office.</p>
                </div>
            </div>
            <div class="col-md-2">

                @include('user.user_layout.sideNav')

            </div>
        </div>
    </div>
@endsection
