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

    public function contactUs()
    {
        return view('landingPage.contactUs');
    }

    public function aboutUs()
    {
        return view('landingPage.aboutUs');
    }

    public function faq()
    {
        return view('landingPage.faq');
    }

    public function help()
    {
        return view('landingPage.help');
    }

    public function policy()
    {
        return view('landingPage.policy');
    }

    public function news()
    {
        $news = News::get();
        return view('landingPage.news' , compact('news'));
    }

}
