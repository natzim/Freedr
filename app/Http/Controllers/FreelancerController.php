<?php

namespace App\Http\Controllers;

use App\Freelancer;
use App\PortfolioItem;
use Auth;
use Request;

class FreelancerController extends Controller
{
    public function edit()
    {
        $profile = Auth::user()->freelancer;

        return view('dashboard.profile.edit', compact('profile'));
    }

    public function update()
    {
        if (Auth::user()->freelancer()->exists())
        {
            $freelancer = Auth::user()->freelancer;

            $freelancer->fill(Request::all());

            $freelancer->save();
        }
        else
        {
            $input = Request::all();
            $freelancer = Freelancer::create($input);

            $freelancer->user()->associate(Auth::user());

            $freelancer->save();
        }

        return redirect()->route('dashboard.profile');
    }

    public function show($id)
    {
        $profile = Freelancer::findOrFail($id);

        return view('dashboard.profile.show', compact('profile'));
    }

    public function showPortfolio($id)
    {
        $profile = Freelancer::findOrFail($id);

        return view('dashboard.profile.portfolio', compact('profile'));
    }

    public function add($id)
    {
        $profile = Freelancer::findOrFail($id); // lol anybody can access this

        return view('dashboard.profile.add', compact('profile'));
    }

    public function addItem($id)
    {
        $profile = Freelancer::findOrFail($id);

        $item = PortfolioItem::create(Request::all());

        $item->freelancer()->associate($profile);

        $item->save();

        return redirect()->route('dashboard.profile.portfolio', $id);
    }
}