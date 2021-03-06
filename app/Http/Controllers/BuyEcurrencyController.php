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
            'buyer_Email' => 'required|email',
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
        // get the user desired amount
        $userBuyingAmount = $validatedData['buyingAmount'];
        //checking the amount is greater than 50
        if ($userBuyingAmount < 50)
        {
            return redirect()->back()->with('error', 'Minimum amount is 50 for Transaction');
        }
        // get the admin selling price
        $totalSellingPrice = $adminSellingPrice * $userBuyingAmount;
        $buyEcurrency->totalSellingPrice = $totalSellingPrice;

        $buyEcurrency->e_bank = $validatedData['e_bank'];
        $buyEcurrency->account_number = $validatedData['account_number'];
        $buyEcurrency->account_name = $validatedData['account_name'];
        $buyEcurrency->buyer_Email = $validatedData['buyer_Email'];
        $buyEcurrency->save();

         // get the user desired amount
        // $userBuyingAmount = $validatedData['buyingAmount'];
        // // get the admin selling price
        // $totalSellingPrice = $adminSellingPrice * $userBuyingAmount;

        return view('user.Exchange.confirmBuyExchange', compact('buyEcurrency'))->with('success', 'Transaction Recevied Successful');
    }

    public function destroy($id)
    {
        $buyEcurrency = BuyEcurrency::findOrFail($id);
        $buyEcurrency->delete();
        return redirect()->route('user.index')->with('success', 'Transaction Deleted Successfully');
    }
}
