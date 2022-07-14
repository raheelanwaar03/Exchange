<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::get();
        return view('admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addCoin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'coinName' => 'required|string|max:255',
            'buyPrice' => 'required|numeric',
            'sellPrice' => 'required|numeric',
        ]);
        $admin = new Admin;
        $admin->coinName = $data['coinName'];
        $admin->buyPrice = $data['buyPrice'];
        $admin->sellPrice = $data['sellPrice'];
        $admin->save();
        return redirect()->route('admin.index')->with('success', 'Coin added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.editCoin', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        // edit coin
        $data = $request->validate([
            'coinName' => 'required|string|max:255',
            'buyPrice' => 'required|numeric',
            'sellPrice' => 'required|numeric',
        ]);
        $admin = Admin::find($admin->id);
        $admin->coinName = $data['coinName'];
        $admin->buyPrice = $data['buyPrice'];
        $admin->sellPrice = $data['sellPrice'];
        $admin->save();
        return redirect()->route('admin.index')->with('massage', 'Coin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        // delete coin from database
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'Coin deleted successfully');
    }
}
