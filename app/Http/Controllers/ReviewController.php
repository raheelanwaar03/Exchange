<?php

namespace App\Http\Controllers;

use App\Mail\review as MailReview;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{
    // view review page

    public function review()
    {
        return view('user.reviews');
    }

    // store review
    public function store(Request $request)
    {
        $request->validate([
            'stars' => 'required',
            'experience' => 'required',
        ]);
        $review = new Review();
        $review->name = auth()->user()->name;
        $review->stars = $request->stars;
        $review->experience = $request->experience;
        $review->save();
        // sending email to  user after review
        $userEmail = auth()->user()->email;
        // send email to user
        Mail::to($userEmail)->send(new MailReview($review));
        return redirect()->route('user.index')->with('success', 'Review submitted successfully');
    }

    // view feedback page
    public function feedback()
    {
        $reviews = Review::all();
        return view('user.feedback', compact('reviews'));
    }
}
