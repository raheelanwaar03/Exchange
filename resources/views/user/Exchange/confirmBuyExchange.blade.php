@extends('user.user_layout.app')

@section('page-title')
    <h3>Hi {{ auth()->user()->name }} To Your {{ env('APP_NAME') }} Account </h3>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-3">
                <h1 class="text-center" style="color:#FF890E">Account Funding
                    <hr style="width: 400px"; color="#FF890E">
                </h1>
                <table class="table-bordered w-100 text-center">
                    <tr>
                        <th>
                            <h5>Transaction ID</h5>
                        </th>
                        <td>
                            <h5>{{ $buyEcurrency->transaction_id }}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h5>Requested Amount</h5>
                        </th>
                        <td>
                            <h5>${{ $buyEcurrency->buyingAmount }}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h5>Account to be funded</h5>
                        </th>
                        <td>
                            <h5>YOUR E-BANK: {{ $buyEcurrency->e_bank }}</h5>
                            <h5>ACCOUNT NO: {{ $buyEcurrency->account_number }}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h5>You Pay in Naira</h5>
                        </th>
                        <td>
                            <h5>₦{{ $buyEcurrency->totalSellingPrice }}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h3>Instruction</h3>
                        </th>
                        <td>
                            <br>
                            <p>Please walk into any of the designated banks provided below to make a cash deposit or simply
                                make an internet transfer
                            </p>
                            <br>
                            <div>
                                <h3>Bank Name: <span>United Bank For Africa(UBA)</span></h3>
                                <h5>ACCOUNT NUMBER:1025345833</h5>
                                <h5>ACCOUNT NAME: Instantflexy & Tech LTD</h5>
                            </div>
                            <br>
                            <div>
                                <p class="text-danger">Ensure that you indicate the transaction ref number in the space
                                    provided for depositor's
                                    name on the bank's deposit slip or in the remark/memo filed in case of Internet
                                    transfer.</p>
                            </div>
                            <br>
                            <div>
                                <p>

                                    After your payment has been received, We will proceed to funding your e-currency account
                                    as shown above
                                </p>
                            </div>
                            <br>
                            <div>
                                <h5>Note:</h5>
                                <p>For further assistance or any complaint, please call our Support lines :
                                    {{ env('APP_Phone') }},
                                    or Email: {{ env('APP_Email') }}</p>
                            </div>
                            <br>
                            <div>
                                <p>
                                    Click the button below to confirm your transaction!</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        {{-- delete this transction --}}
                        <th>
                            <form action="{{ route('user.transcation.delete', ['id' => $buyEcurrency->id]) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Delete
                                    Transaction</button>
                            </form>
                        </th>
                        <td>
                            <a href="{{ route('user.buy.Ecurrency.mail') }}" class="btn btn-success">
                                <i class="fa fa-check"></i>
                                Confirm
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-2">
                @include('user.user_layout.sideNav')
            </div>
        </div>
    </div>
    </div>
@endsection
