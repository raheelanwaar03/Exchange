<?php

namespace App\Http\Controllers;

use App\Mail\adminRejectAccount;
use App\Mail\adminVerifyAccount;
use App\Models\User;
use App\Models\UserVerificationAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminCheckAccountController extends Controller
{
    public function index()
    {
        // showing the verification requests
        $userVerifications = UserVerificationAccount::where('status', 'pending')->get();
        return view('admin.verification', compact('userVerifications'));
    }

    // change the user account status and type to verified
    public function action($id)
    {
        $userVerification = UserVerificationAccount::find($id);
        $userVerification->status = 'unverified';
        $userVerification->save();
        // change the user account type to verified
        $user = User::find($userVerification->user_id);
        $user->account_type = 'verified';
        $user->save();
        // send mail to this user abouny his request
        $userEmail = User::find($userVerification->user_id)->email;
        Mail::to($userEmail)->send(new adminVerifyAccount());

        return redirect()->route('admin.account.verification')->with('success', 'Account verified successfully');
    }

    // change the user account status to rejected
    public function reject($id)
    {
        $userVerification = UserVerificationAccount::find($id);
        $userVerification->status = 'unverified';
        $userVerification->save();
        // change the user account type to verified
        $user = User::find($userVerification->user_id);
        $user->account_type = 'rejected';
        $user->save();
        // send mail to this user abouny his request
        $userEmail = User::find($userVerification->user_id)->email;
        Mail::to($userEmail)->send(new adminRejectAccount());
        return redirect()->route('admin.account.verification')->with('success', 'Account rejected successfully');
    }

    public function rejectedAccounts()
    {
        $users = User::where('account_type', 'rejected')->get();
        return view('admin.reject', compact('users'));
    }

    // unverify the user account

    public function unverify($id)
    {
        $user = User::find($id);
        $user->account_type = 'unverified';
        $user->save();
        return redirect()->back()->with('success', 'Account unverified successfully');
    }

}
