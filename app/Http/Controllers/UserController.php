<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\BuyEcurrency;
use App\Models\News;
use App\Models\SellEcurrency;
use App\Models\User\User;
use Illuminate\Http\Request;

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
        $news = News::get();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
