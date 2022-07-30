<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
             'buyingAmount' => 'required|numeric',
             'e_bank' => 'required|string',
             'account_number' => 'required|string',
             'account_name' => 'required|string',
            ]);

            // This Method Rates
            $query = Admin::where('coinName', $validatedData['e_bank'])->firstorFail();
            $adminSellingPrice = $query->sellPrice;

            // return transaction_id();

        // store in the database
        $buyEcurrency = new BuyEcurrency();
        $buyEcurrency->user_id = auth()->user()->id;
        $buyEcurrency->transaction_id = transaction_id();
        $buyEcurrency->buyingAmount = $validatedData['buyingAmount'];
        $buyEcurrency->e_bank = $validatedData['e_bank'];
        $buyEcurrency->account_number = $validatedData['account_number'];
        $buyEcurrency->account_name = $validatedData['account_name'];
        $buyEcurrency->save();

        // get the user desired amount
        $userBuyingAmount = $validatedData['buyingAmount'];
        // get the admin selling price
        $totalSellingPrice = $adminSellingPrice * $userBuyingAmount;

        return view('user.Exchange.confirmExchange', compact('buyEcurrency' ,'totalSellingPrice'))->with('success', 'Transaction Recevied Successful');

    }

    public function destroy($id)
    {
        $buyEcurrency = BuyEcurrency::findOrFail($id);
        $buyEcurrency->delete();
        return redirect()->route('user.index')->with('success', 'Transaction Deleted Successfully');
    }
}
