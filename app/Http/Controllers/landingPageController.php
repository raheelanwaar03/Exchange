<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class landingPageController extends Controller
{
    public function index()
    {
        $admins = Admin::get();
        $admin = Admin::first();
        return view('landingPage.welcome' , compact('admins' , 'admin'));
    }
}
