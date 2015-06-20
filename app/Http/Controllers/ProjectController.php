<?php

namespace App\Http\Controllers;

use App\Project;
use Auth;
use Request;

class ProjectController extends Controller
{
    public function show($id)
    {
        // TODO: Add auth here
        $project = Project::findOrFail($id);

        return view('dashboard.projects.show', compact('project'));
    }

    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store()
    {
        $project = Project::create(Request::all());

        $project->user()->associate(Auth::user());

        $project->save();

        return redirect()->route('dashboard.projects');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('dashboard.projects.edit', compact('project'));
    }

    public function update($id)
    {
        $project = Project::findOrFail($id);

        $project->fill(Request::all());

        $project->save();

        return redirect()->route('dashboard.projects.show', $id);
    }
}