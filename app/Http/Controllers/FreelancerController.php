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

            $freelancer->title = Request::get('title');
            $freelancer->description = Request::get('description');
            $freelancer->hourly_rate = Request::get('hourly_rate');
            $freelancer->category = Request::get('category');

            $freelancer->save();
        }
        else
        {
            $input = Request::all();

            $input['user_id'] = Auth::id();

            Freelancer::create($input);
        }

        return redirect('/dashboard/profile');
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

        $input = Request::all();

        $input['freelancer_id'] = $profile->id;

        PortfolioItem::create($input);

        return redirect('/dashboard/profile/'.$id.'/portfolio');
    }
}