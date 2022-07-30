<?php

// generating 6 digit unique transaction id

use App\Models\BuyEcurrency;

function transaction_id()
{
    $transaction_id = rand(100000,999999);
    $transaction_id = str_pad($transaction_id,6,'0',STR_PAD_LEFT);
    // storing the random number into the session
    // session()->put('transaction_id', $transaction_id);
    return $transaction_id;
}
