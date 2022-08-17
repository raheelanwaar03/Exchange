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
        $first = rand(2, 3);
        $second = 2;
        $total = $first + $second;
        session()->put('total', $total);
        return view('auth.register', compact('first', 'second'));
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
        // return session()->get('total');
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'date_of_birth' => ['required', 'date'],
            'phone_number' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'confirm_not_robot' => ['required', 'string', 'max:255'],
        ]);

        if ($request->confirm_not_robot == session()->get('total')) {
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
            return redirect()->back()->with(['error' => 'Please confirm that you are not a robot']);
        }
    }
}
