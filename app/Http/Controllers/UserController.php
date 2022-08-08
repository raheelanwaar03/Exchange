<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\BuyEcurrency;
use App\Models\News;
use App\Models\SellEcurrency;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyEcurrencys = BuyEcurrency::where('user_id', auth()->user()->id)->get();
        $sellEcurrencys = SellEcurrency::where('user_id', auth()->user()->id)->get();
        $admins = Admin::get();
        $admin = Admin::first();
        return view('user.index', compact('admins' , 'admin' , 'buyEcurrencys' , 'sellEcurrencys'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function help()
    {
        return view('user.help');
    }

    public function Contact()
    {
        return view('user.contact');
    }

    public function FAQ()
    {
        return view('user.FaQ');
    }

    public function news()
    {
        $news = News::all();
        return view('user.news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function policy()
    {
        return view('user.policy');
    }
}
