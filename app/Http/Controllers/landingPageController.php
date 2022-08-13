<?php

namespace App\Http\Controllers;

use App\Mail\TestMal;
use App\Models\Admin;
use App\Models\News;
use App\Models\Review;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class landingPageController extends Controller
{
    public function index()
    {
      // check if the user is unique then store the user in the database

        $visitor = Visitor::where('ip', request()->ip())->first();
        if (! $visitor) {
            $visitor = new Visitor();
            $visitor->ip = request()->ip();
            $visitor->save();
        }
        //count the number of new visitors
        $visitors = Visitor::whereDate('created_at', today())->count();
        $news = News::paginate(3);
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
        $news = News::paginate(5);
        return view('landingPage.news' , compact('news'));
    }

    public function review()
    {
        $reviews = Review::paginate(10);
        return view('landingPage.review' , compact('reviews'));
    }

}
