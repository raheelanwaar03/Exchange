<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        session_start();
    $first_num = rand(1 ,10);
    $second_num = rand(1,10);
    $answer = $first_num + $second_num;
    session(['answer'=>$answer]);
        return view('auth.register',compact('first_num','second_num'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'date_of_birth' => ['required', 'date'],
            'phone_number' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'answer' => 'required',
        ]);
        if ($request->answer = session('answer')) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'date_of_birth' => $request->date_of_birth,
                'phone_number' => $request->phone_number,
                'country' => $request->country,
            ]);
            event(new Registered($user));
            Auth::login($user);
            return redirect()->intended(RouteServiceProvider::HOME)->with('success', 'Welcome to your new Account');
        } else {
            return redirect()->back()->with('error','Captcha validation error');
        }

    }
}
