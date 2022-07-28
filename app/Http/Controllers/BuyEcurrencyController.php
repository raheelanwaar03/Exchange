<?php

namespace App\Http\Controllers;

use App\Models\BuyEcurrency;
use Illuminate\Http\Request;

class BuyEcurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.Exchange.buyEcurrency');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     function store(Request $request)
     {

         // validate the data
         $validatedData = $request->validate([
             'buyingAmount' => 'required',
             'e_bank' => 'required|string',
             'account_number' => 'required|string',
             'account_name' => 'required|string',
            ]);


        // store in the database
        $buyEcurrency = new BuyEcurrency();
        $buyEcurrency->user_id = auth()->user()->id;
        $buyEcurrency->transaction_id = transcation_id();
        $buyEcurrency->buyingAmount = $validatedData['buyingAmount'];
        $buyEcurrency->e_bank = $validatedData['e_bank'];
        $buyEcurrency->account_number = $validatedData['account_number'];
        $buyEcurrency->account_name = $validatedData['account_name'];
        $buyEcurrency->save();

        // redirect to the index page
        return redirect()->route('user.index')->with('success', 'Your Buying E-currency request has been Recived');

    }

}
