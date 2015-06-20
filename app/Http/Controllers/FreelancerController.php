<?php

namespace App\Http\Controllers;

use App\Freelancer;
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
}