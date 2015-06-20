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
        return view('dashboard.matches.index');
    }
}