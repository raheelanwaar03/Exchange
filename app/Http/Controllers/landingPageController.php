<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\News;
use Illuminate\Http\Request;

class landingPageController extends Controller
{
    public function index()
    {
        $news = News::get();
        $admins = Admin::get();
        $admin = Admin::first();
        return view('landingPage.welcome' , compact('admins' , 'admin' , 'news'));
    }
}
