<?php

namespace App\Http\Controllers;

use App\Project;
use App\Freelancer;
use Auth;
use Request;

class FindController extends Controller
{
    public function projects()
    {
        $project = Project::where('category', Auth::user()->freelancer->category)
            ->orderByRaw('RAND()')
            ->first();

        return view('dashboard.find.projects', compact('project'));
    }

    public function freelancers()
    {
        $profile = Freelancer::where('category', Auth::user()->projects()->first()->category)
            ->orderByRaw('RAND()')
            ->first();

        return view('dashboard.find.freelancers', compact('profile'));
    }
}