<?php

namespace App\Http\Controllers;

use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
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
        return view('dashboard.projects.index');
    }

    public function matches()
    {
        return view('dashboard.matches.index');
    }
}