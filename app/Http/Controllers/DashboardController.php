<?php

namespace App\Http\Controllers;

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
        return view('dashboard.profile.index');
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