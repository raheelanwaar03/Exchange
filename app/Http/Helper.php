<?php

// generating 6 digit unique transaction id

use App\Models\BuyEcurrency;
use App\Models\SellEcurrency;

function transaction_id()
{
    $transaction_id = rand(100000, 999999);
    $transaction_id = str_pad($transaction_id, 6, '0', STR_PAD_LEFT);
    return $transaction_id;
}

// getting the latest transaction details of this user from the database for buying ecurrency
function latest_transaction_details_buy($user_id)
{
    $latest_transaction = BuyEcurrency::where('user_id', $user_id)->where('status', 'pending')->latest();
    return $latest_transaction;
}
// getting the latest transaction details of this user from the database for selling ecurrency

function latest_transaction_details_sell($user_id)
{
    $latest_transaction = SellEcurrency::where('user_id', $user_id)->where('status', 'pending')->latest();
    return $latest_transaction;
}

// function captchaCode()
// {
//     session_start();
//     $first_num = rand(1 , 10);
//     $second_num = rand(1,10);
//     $operators = array("+" , "-", "*");
//     $operator = rand(0, count($operators)  -1);
//     $operator = $operators[$operator];
//     $answer = 0;
//     switch ($operator) {
//         case "+":
//             $answer = $first_num + $second_num;
//             break;
//         case "-":
//             $answer = $first_num - $second_num;
//             break;
//         case "*":
//             $answer = $first_num * $second_num;
//             break;
//     }
//     session(['answer'=>$answer]);
// }
