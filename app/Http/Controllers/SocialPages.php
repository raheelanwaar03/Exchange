<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialPages extends Controller
{
    public function contactUs()
    {
        return view('admin.contactUs');
    }

    public function aboutUs()
    {
        return view('admin.aboutUs');
    }


    public function policy()
    {
        return view('admin.faq');
    }

    public function help()
    {
        return view('admin.help');
    }

}
