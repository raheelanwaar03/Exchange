<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\SellEcurrency;
use Illuminate\Http\Request;

class SellEcurrencyController extends Controller
{
    public function index()
    {
        return view('user.Exchange.sellEcurrency');
    }

    // store the sell e-currency details
    public function store()
    {
        // validate the request...
        $validatedData = request()->validate([
            'sellingAmount' => 'required|numeric',
            'e_bank' => 'required|string',
            'bank_name'=>'required|string',
            'account_number' => 'required|string',
            'account_name' => 'required|string',
            'seller_email' => 'required|email',
        ]);

        $query = Admin::where('coinName', $validatedData['e_bank'])->firstorFail();
        $adminBuyingAmount = $query->buyPrice;
        $adminBankDetail = $query->e_bank;

        // return $adminBankDetail;

        // store in the database
        $sellEcurrency = new SellEcurrency();
        $sellEcurrency->user_id = auth()->user()->id;
        $sellEcurrency->transaction_id = transaction_id();
        $sellEcurrency->sellingAmount = $validatedData['sellingAmount'];
        // get the user desired amount
        $userSellingAmount = $validatedData['sellingAmount'];
        //checking the amount is greater than 50
        if ($userSellingAmount < 50)
        {
            return redirect()->back()->with('error', 'Minimum amount is 50 for Transaction');
        }
        // get the admin buying price
        $totalBuyingPrice = $adminBuyingAmount * $userSellingAmount;
        $sellEcurrency->totalBuyingPrice = $totalBuyingPrice;

        $sellEcurrency->e_bank = $validatedData['e_bank'];
        $sellEcurrency->e_bank_details = $adminBankDetail;
        $sellEcurrency->bank_name = $validatedData['bank_name'];
        $sellEcurrency->account_number = $validatedData['account_number'];
        $sellEcurrency->account_name = $validatedData['account_name'];
        $sellEcurrency->seller_email = $validatedData['seller_email'];
        $sellEcurrency->save();

        return view('user.Exchange.confirmSellExchange', compact('sellEcurrency'))->with('success', 'Your Selling Request Recevied Successful');

    }
    // delete the latest transaction
    public function destroy($id)
    {
        $sellEcurrency = SellEcurrency::findOrFail($id);
        $sellEcurrency->delete();
        return redirect()->route('user.index')->with('success', 'Transaction Deleted Successfully');
    }
}
