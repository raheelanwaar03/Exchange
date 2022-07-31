<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserVerificationAccount;
use Illuminate\Http\Request;

class UserVerificationAccountController extends Controller
{
    public function index()
    {
        return view('user.verficationcenter');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'passport' => 'required',
            'voterCard' => 'required',
            'nin' => 'required',
            'drivingLicence' => 'required',
        ]);

        // check that the user has not already verified his account
        $userVerificationAccount = User::where('id', auth()->user()->id)->first();
        $userVerificationAccount = $userVerificationAccount->account_type;

        if ($userVerificationAccount == 'verified') {
            return redirect()->back()->with('error', 'You have already verified your account');
        }

        $userVerification = new UserVerificationAccount();
        $userVerification->user_id = auth()->user()->id;
        $userVerification->passport = $validateData['passport'];
        $userVerification->voterCard = $validateData['voterCard'];
        $userVerification->nin = $validateData['nin'];
        $userVerification->drivingLicence = $validateData['drivingLicence'];
        $userVerification->save();
        return redirect()->route('user.index')->with('success' , 'Your Account Verification Request Has Been Recived Successfully');

    }

}
