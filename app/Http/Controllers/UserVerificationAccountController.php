<?php

namespace App\Http\Controllers;

use App\Mail\adminVerificationReq;
use App\Mail\verificationReq;
use App\Models\User;
use App\Models\UserVerificationAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserVerificationAccountController extends Controller
{
    public function index()
    {
        return view('user.verficationcenter');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'method' => 'required',
            'front_side' => 'required',
            'back_side' => 'required',
        ]);

        // save the images of user's verification account
        $file = $request->file('front_side');
        $fileNameF = rand(1111, 999999) . '.' .  $file->getClientOriginalExtension();
        $file->move(public_path('images'), $fileNameF);
        //back side
        $file = $request->file('back_side');
        $fileNameB = rand(1111, 999999) . '.' .  $file->getClientOriginalExtension();
        $file->move(public_path('images'), $fileNameB);

        // check that the user has not already verified his account
        $userVerificationAccount = User::where('id', auth()->user()->id)->first();
        $userVerificationAccount = $userVerificationAccount->account_type;

        if ($userVerificationAccount == 'verified') {
            return redirect()->back()->with('error', 'You have already verified account');
        }

        $userVerification = new UserVerificationAccount();
        $userVerification->user_id = auth()->user()->id;
        $userVerification->method = $validateData['method'];
        $userVerification->front_side = $fileNameF;
        $userVerification->back_side = $fileNameB;
        $userVerification->save();


        // send email to admin
        $admin = User::where('role', 'admin')->first();
        $adminEmail = $admin->email;
        Mail::to($adminEmail)->send(new adminVerificationReq());

        // send mail to this user aboun his request
        $user = User::where('id', auth()->user()->id)->first();
        $accVerificationEmail = $user->email;
        // sending mail to admin and user
        Mail::to($accVerificationEmail,)->send(new verificationReq());
        // Redirect
        return redirect()->route('user.index')->with('success' , 'Your Account Verification Request Has Been Recived Successfully');

    }

}
