<?php

namespace App\Http\Controllers;

use App\Mail\adminBuyEcurrencyReq;
use App\Mail\sellEcurrencyReq;
use App\Models\Admin;
use App\Models\BuyEcurrency;
use App\Models\SellEcurrency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SellEcurrencyController extends Controller
{
    public function index()
    {
        $first = 5;
        $second = 3;
        $result = $first + $second;
        session()->put('result', $result);
        return view('user.Exchange.sellEcurrency' , compact('first', 'second'));
    }

    // store the sell e-currency details
    public function store()
    {
        // validate the request...
        $validatedData = request()->validate([
            'sellingAmount' => 'required|numeric',
            'e_bank' => 'required|string',
            'bank_name' => 'required|string',
            'account_number' => 'required|string',
            'account_name' => 'required|string',
            'confirm_not_robot' => 'required|integer',
        ]);

        $userNum = request()->input('confirm_not_robot');
        $result = request()->session()->get('result');
        // check if the user is a robot
        if ($userNum != $result) {
            return redirect()->back()->with('error', 'You are a robot');
        }

        $query = Admin::where('coinName', $validatedData['e_bank'])->firstorFail();
        $adminBuyingAmount = $query->sellPrice;
        $adminBankDetail = $query->e_bank;

        // return $adminBankDetail;

        // store in the database
        $sellEcurrency = new SellEcurrency();
        $sellEcurrency->user_id = auth()->user()->id;
        $sellEcurrency->transaction_id = transaction_id();
        $sellEcurrency->sellingAmount = $validatedData['sellingAmount'];
        // get the user desired amount
        $userSellingAmount = $validatedData['sellingAmount'];
        //checking the amount is greater than 10
        if ($userSellingAmount < 10) {
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

        // get the admin buying price
        $totalBuyingPrice = $adminBuyingAmount * $userSellingAmount;
        $sellEcurrency->totalBuyingPrice = $totalBuyingPrice;

        $sellEcurrency->e_bank = $validatedData['e_bank'];
        $sellEcurrency->e_bank_details = $adminBankDetail;
        $sellEcurrency->bank_name = $validatedData['bank_name'];
        $sellEcurrency->account_number = $validatedData['account_number'];
        $sellEcurrency->account_name = $validatedData['account_name'];
        $sellEcurrency->seller_email = auth()->user()->email;
        $sellEcurrency->save();

        return view('user.Exchange.confirmSellExchange', compact('sellEcurrency'))->with('success', 'Your Selling Request Recevied Successfully.Please check your Email');
    }
    // delete the latest transaction
    public function destroy($id)
    {
        $sellEcurrency = SellEcurrency::findOrFail($id);
        $sellEcurrency->delete();
        return redirect()->route('user.index')->with('success', 'Transaction Deleted Successfully');
    }

    public function mail()
    {
        //send email to the Admin

        $adminEmail = User::where('role', 'admin')->firstorFail();
        $adminEmail = $adminEmail->email;
        Mail::to($adminEmail)->send(new adminBuyEcurrencyReq());

        // send Email to user
        $user = User::where('id', auth()->user()->id)->first();
        $userEmail = $user->email;
        // gettin the latest transaction
        $latestTransaction = SellEcurrency::where('user_id', auth()->user()->id)->latest()->first();
        Mail::to($userEmail)->send(new sellEcurrencyReq($latestTransaction));
        return redirect()->route('user.index');
    }
}
