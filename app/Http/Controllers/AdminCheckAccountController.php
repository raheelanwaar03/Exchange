<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserVerificationAccount;
use Illuminate\Http\Request;

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
        $userVerification->status = 'verified';
        $userVerification->save();
        // change the user account type to verified
        $user = User::find($userVerification->user_id);
        $user->account_type = 'verified';
        $user->save();

        return redirect()->route('admin.account.verification')->with('success', 'Account verified successfully');
    }

}
