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
                            <h5>{{ $sellEcurrency->transaction_id }}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h5>Requested Amount</h5>
                        </th>
                        <td>
                            <h5>${{ $sellEcurrency->sellingAmount }}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h5>Account to be funded</h5>
                        </th>
                        <td>
                            <h5>Your Selected E-Bank: {{ $sellEcurrency->e_bank }}</h5>
                            <h5>Our ACCOUNT NO: {{ $sellEcurrency->e_bank_details }}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h5>You Recived</h5>
                        </th>
                        <td>
                            <h5>₦{{ $sellEcurrency->totalBuyingPrice }}</h5>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h3>Instruction</h3>
                        </th>
                        <td>
                            <br>
                            <p>Please allow between 3-12hrs for your bank account as submitted (shown below) to be credited
                                with the specified value.
                            </p>
                            <br>
                            <div>
                                <h3>Bank Name : {{ $sellEcurrency->bank_name }}</h3>
                                <h5>ACCOUNT NUMBER {{ $sellEcurrency->account_number }}</h5>
                                <h5>ACCOUNT NAME : {{ $sellEcurrency->account_name }}</h5>
                            </div>
                            <br>
                            <div>
                                <p class="text-danger">
                                    After your fund has been transferred, you will receive a transaction confirmation email
                                    containing all payment details. Please keep this email for reference needs.</p>
                            </div>
                            <br>
                            <div>
                                <h5>Note:</h5>
                                <p>For further assistance or any complaint, please call our Support lines :
                                    {{ env('APP_Phone') }} or Email: {{ env('APP_Email') }}</p>
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
                            <form action="{{ route('user.selling.transcation.delete', ['id' => $sellEcurrency->id]) }}"
                                method="POST">
                                @csrf
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Delete
                                    Transaction</button>
                            </form>
                        </th>
                        <td>
                            <a href="{{ route('user.sell.ecurrency.mail') }}" class="btn btn-success">
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
