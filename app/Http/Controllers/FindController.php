<?php

namespace App\Http\Controllers;

use App\Decision;
use App\Match;
use App\Project;
use App\Freelancer;
use Auth;
use Request;

class FindController extends Controller
{
    public function projects()
    {
        $project = Project::where('category', Auth::user()->freelancer->category)
            ->orderBy('updated_at')
            ->first();

        // DO SOMETHING WITH DECISIONS

        return view('dashboard.find.projects', compact('project'));
    }

    public function acceptProject($id)
    {
        $profileId = Auth::user()->freelancer->id;

        // If has project has accepted you
        if (Decision::where('freelancer_id', $profileId)
                ->where('project_id', $id)
                ->where('decision', 1)
                ->count() > 0)
        {
            Match::create([
                'freelancer_id' => $profileId,
                'project_id' => $id,
            ]);
        }
        else
        {
            Decision::create([
                'freelancer_id' => $profileId,
                'project_id' => $id,
                'decision' => 1,
            ]);
        }

        return redirect()->route('dashboard.find.projects');
    }

    public function denyProject($id)
    {
        $profileId = Auth::user()->freelancer->id;

        Decision::create([
            'freelancer_id' => $profileId,
            'project_id' => $id,
            'decision' => 0,
        ]);

        return redirect()->route('dashboard.find.projects');
    }

    public function freelancers()
    {
        $profile = Freelancer::where('category', Auth::user()->projects()->first()->category)
            ->orderBy('updated_at')
            ->first();

        return view('dashboard.find.freelancers', compact('profile'));
    }

    public function acceptFreelancer($id)
    {
        $projectId = Auth::user()->projects()->first()->id;

        // If has project has accepted you
        if (Decision::where('project_id', $projectId)
                ->where('freelancer_id', $id)
                ->where('decision', 1)
                ->count() > 0)
        {
            Match::create([
                'project_id' => $projectId,
                'freelancer_id' => $id,
            ]);
        }
        else
        {
            Decision::create([
                'project_id' => $projectId,
                'freelancer_id' => $id,
                'decision' => 1,
            ]);
        }

        return redirect()->route('dashboard.find.freelancers');
    }

    public function denyFreelancer($id)
    {
        $projectId = Auth::user()->projects()->first()->id;

        Decision::create([
            'project_id' => $projectId,
            'freelancer_id' => $id,
            'decision' => 0,
        ]);

        return redirect()->route('dashboard.find.freelancers');
    }
}