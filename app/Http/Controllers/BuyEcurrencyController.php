<?php

namespace App\Http\Controllers;

use App\Mail\adminSellEcurrencyReq;
use App\Mail\buyEcurrencyReq;
use App\Models\Admin;
use App\Models\BuyEcurrency;
use App\Models\SellEcurrency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $adminSellingPrice = $query->buyPrice;

        // store in the database
        $buyEcurrency = new BuyEcurrency();
        $buyEcurrency->user_id = auth()->user()->id;
        $buyEcurrency->transaction_id = transaction_id();
        $buyEcurrency->buyingAmount = $validatedData['buyingAmount'];
        // get the user desired amount
        $userBuyingAmount = $validatedData['buyingAmount'];
        //checking the amount is greater than 10
        if ($userBuyingAmount < 10) {
            return redirect()->back()->with('error', 'Minimum amount is 10 for Transaction');
        }

        // check if user account type is rejected
        if (auth()->user()->account_type == 'rejected') {
            return redirect()->back()->with('error', 'Your account is rejected. Please contact admin');
        }
        //checking limit for unverified users is not greater than 1000 for one day
        if (auth()->user()->account_type == 'unverified') {
            $limit = 1000;
            $today = date('Y-m-d');
            $sellCount = SellEcurrency::where('user_id', auth()->user()->id)->where('created_at', '>=', $today)->get();
            //get the sum of the selling amount
            $sellSum = $sellCount->sum('sellingAmount');
            // return $sellSum;
            //checking the buyEcurrency
            $buyCount = BuyEcurrency::where('user_id', auth()->user()->id)->where('created_at', '>=', $today)->get();
            //get the sum of the selling amount
            $buySum = $buyCount->sum('buyingAmount');
            // return $buySum;
            //calculte the total amount
            $total = $sellSum + $buySum;
            // return $total;
            //check the sum of the selling amount is greater than the limit
            if ($total >= $limit) {
                return redirect()->back()->with('error', 'You have exceeded the limit of 1000 for one day.Verify your account to continue');
            }
        }

        // get the admin selling price
        $totalSellingPrice = $adminSellingPrice * $userBuyingAmount;
        $buyEcurrency->totalSellingPrice = $totalSellingPrice;

        $buyEcurrency->e_bank = $validatedData['e_bank'];
        $buyEcurrency->account_number = $validatedData['account_number'];
        $buyEcurrency->account_name = $validatedData['account_name'];
        $buyEcurrency->buyer_Email = auth()->user()->email;
        $buyEcurrency->save();

        return view('user.Exchange.confirmBuyExchange', compact('buyEcurrency'))->with('success', 'Buying Request Recevied Successfully');
    }

    public function destroy($id)
    {
        $buyEcurrency = BuyEcurrency::findOrFail($id);
        $buyEcurrency->delete();
        return redirect()->route('user.index')->with('success', 'Transaction Deleted Successfully');
    }

    public function mail()
    {
        // send Email to user and admin
        $adminEmail = User::where('role', 'admin')->firstorFail();
        $adminEmail = $adminEmail->email;
        Mail::to($adminEmail)->send(new adminSellEcurrencyReq());

        //sending email to user
        $user = User::where('id', auth()->user()->id)->first();
        $userEmail = $user->email;
        // getting user latest transaction details
        $latestTransaction = BuyEcurrency::where('user_id', auth()->user()->id)->latest()->first();
        Mail::to($userEmail)->send(new buyEcurrencyReq($latestTransaction));
        return redirect()->route('user.index')->with('success', 'Please Wait for admin approval We have sent you an Email With your Transaction Details');
    }
}
