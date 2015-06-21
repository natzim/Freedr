<?php

namespace App\Http\Controllers;

use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $profile = Auth::user()->freelancer;
        $projects = Auth::user()->projects;

        return view('dashboard.index', compact('profile', 'projects'));
    }

    public function find()
    {
        return view('dashboard.find.index');
    }

    public function profile()
    {
        $profile = Auth::user()->freelancer;

        return view('dashboard.profile.index', compact('profile'));
    }

    public function projects()
    {
        $projects = Auth::user()->projects;

        return view('dashboard.projects.index', compact('projects'));
    }

    public function matches()
    {
        $freelancerMatches = null;
        $projectMatches = null;

        if (!is_null(Auth::user()->freelancer))
        {
            $freelancerMatches = Auth::user()->freelancer->matches;
        }

        if (!is_null(Auth::user()->projects))
        {
            $projectMatches = Auth::user()->projects()->first()->matches;
        }

        return view('dashboard.matches.index', compact('freelancerMatches', 'projectMatches'));
    }
}