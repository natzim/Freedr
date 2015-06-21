<?php

namespace App\Http\Controllers;

use App\Freelancer;
use App\FreelancerReview;
use App\Match;
use Auth;
use Request;

class MatchController extends Controller
{
    public function newReview($id)
    {
        $freelancer = Freelancer::findOrFail($id);

        return view('dashboard.matches.new', compact('freelancer'));
    }

    public function storeReview($id)
    {
        $freelancer = Freelancer::findOrFail($id);

        $review = FreelancerReview::create(Request::all());

        $review->freelancer()->associate($freelancer);
        $review->user()->associate(Auth::user());

        $review->save();

        return redirect()->route('dashboard.matches');
    }

    public function chat($id)
    {
        $match = Match::findOrFail($id);

        return view('dashboard.matches.chat', compact('match'));
    }
}