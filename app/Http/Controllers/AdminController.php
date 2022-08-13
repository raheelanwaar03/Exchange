<?php

namespace App\Http\Controllers;

use App\Mail\closedsellTranction;
use App\Mail\completesellTranction;
use App\Mail\completeTranction;
use App\Mail\declinesellTranction;
use App\Mail\declineTranction;
use App\Models\Admin;
use App\Models\BuyEcurrency;
use App\Models\News;
use App\Models\Review;
use App\Models\SellEcurrency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

     public function allUser()
     {
         $users = User::paginate(10);
         return view('admin.allUsers', compact('users'));
     }


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
            'e_bank' => 'required|string|max:255',
            'coinImage' => 'required|image|mimes:jpeg,png,jpg,gif,web,svg|max:2048',
            'buyPrice' => 'required|numeric',
            'sellPrice' => 'required|numeric',
        ]);

        $file = $request->file('coinImage');
        $fileName = rand(1111, 999999) . '.' .  $file->getClientOriginalExtension();
        $file->move(public_path('images'), $fileName);


        $admin = new Admin;
        $admin->coinName = $data['coinName'];
        $admin->e_bank = $data['e_bank'];
        $admin->coinImage = $fileName;
        $admin->buyPrice = $data['buyPrice'];
        $admin->sellPrice = $data['sellPrice'];
        $admin->save();
        return redirect()->route('admin.index')->with('success', 'E-Currency added successfully');
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
        $admin = Admin::find($admin->id);
        $admin->coinName = $request->coinName;
        $admin->buyPrice = $request->buyPrice;
        $admin->sellPrice = $request->sellPrice;
        $admin->e_bank = $request->e_bank;
        $admin->save();
        return redirect()->route('admin.index')->with('massage', 'E-Currency updated successfully');
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
        return redirect()->route('admin.index')->with('success', 'E-Currency has been deleted successfully');
    }

    public function news()
    {
        return view('admin.news');
    }

    public function newsDetails()
    {
        $news = News::paginate(8);
        return view('admin.newsDetails', compact('news'));
    }

    public function newSaving(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:60',
            'description' => 'required|max:355',
        ]);


        $news = new News();
        $news->title = $data['title'];
        $news->description = $data['description'];
        $news->save();
        return redirect()->back()->with('success', 'News added successfully');
    }

    // admin can see the buying requests from users

    public function buyingRequest()
    {
        $buyEcurrencies = BuyEcurrency::where('status', 'pending')->paginate(10);
        return view('admin.Exchange.sellEcurrency', compact('buyEcurrencies'));
    }

    public function complete($id)
    {
        // complete the buying request
        $buyEcurrency = BuyEcurrency::find($id);
        $buyEcurrency->status = 'completed';
        $buyEcurrency->save();
        // send email to the user
        $user = User::find($buyEcurrency->user_id);
        $user->email = $user->email;
        Mail::to($user->email)->send(new completeTranction());
        return redirect()->back()->with('success', 'Buying request completed successfully');
    }

    public function decline($id)
    {
        // decline the buying request
        $buyEcurrency = BuyEcurrency::find($id);
        $buyEcurrency->status = 'declined';
        $buyEcurrency->save();
        // send email to the user
        $user = User::find($buyEcurrency->user_id);
        $user->email = $user->email;
        Mail::to($user->email)->send(new declineTranction());
        return redirect()->back()->with('success', 'Buying request declined successfully');
    }

    public function sellingRequest()
    {
        $sellEcurrencys = SellEcurrency::where('status', 'pending')->paginate(10);
        return view('admin.Exchange.buyEcurrency', compact('sellEcurrencys'));
    }

    // admin can see the selling requests from users and can complete or decline them
    public function completeSell($id)
    {
        // complete the selling request
        $sellEcurrency = SellEcurrency::find($id);
        $sellEcurrency->status = 'completed';
        $sellEcurrency->save();
        // send email to the user
        $user = User::find($sellEcurrency->user_id);
        $user->email = $user->email;
        Mail::to($user->email)->send(new completesellTranction());
        return redirect()->back()->with('success', 'Selling request completed successfully');
    }

    public function declineSell($id)
    {
        $sellEcurrency = SellEcurrency::find($id);
        $sellEcurrency->status = 'declined';
        $sellEcurrency->save();
        // send email to the user
        $user = User::find($sellEcurrency->user_id);
        $user->email = $user->email;
        Mail::to($user->email)->send(new declinesellTranction());
        return redirect()->back()->with('success', 'Buying request declined successfully');
    }

    public function closed($id)
    {
        $sellEcurrency = SellEcurrency::find($id);
        $sellEcurrency->status = 'closed';
        $sellEcurrency->save();
        // send email to the user
        $user = User::find($sellEcurrency->user_id);
        $user->email = $user->email;
        Mail::to($user->email)->send(new closedsellTranction());
        return redirect()->back()->with('success', 'Buying request closed successfully');
    }

    // destroy this news
    public function destroyNews($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->back()->with('success', 'News deleted successfully');
    }

    // Rejected accounts

    //feedback

    public function review()
    {
        $reviews = Review::paginate(10);
        return view('admin.feedback' , compact('reviews'));
    }


    //delete tihs review

    public function destroyReview($id)
    {
        $review = Review::find($id);
        $review->delete();
        return redirect()->back()->with('success', 'Review deleted successfully');
    }


}
