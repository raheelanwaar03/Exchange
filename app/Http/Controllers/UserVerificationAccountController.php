<?php

namespace App\Http\Controllers;

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

        $userVerification = new UserVerificationAccount();
        $userVerification->passport = $validateData['passport'];
        $userVerification->voterCard = $validateData['voterCard'];
        $userVerification->nin = $validateData['nin'];
        $userVerification->drivingLicence = $validateData['drivingLicence'];
        $userVerification->save();

        return redirect()->route('user.index')->with('success' , 'Your Account Verification Request Has Been Recived Successfully');

    }

}
