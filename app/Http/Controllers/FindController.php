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
    private function findProjects()
    {
        $projects = Project::where('category', Auth::user()->freelancer->category)
            ->orderBy('updated_at', 'desc')
            ->get();

        foreach($projects as $project)
        {
            if (Decision::where('project_id', $project->id)
                ->where('freelancer_id', Auth::user()->freelancer->id)
                ->where('decision', 0)
                ->exists())
            {
                continue;
            }

            if (Decision::where('project_id', $project->id)
                ->where('freelancer_id', Auth::user()->freelancer->id)
                ->where('user_id', Auth::id())
                ->exists())
            {
                continue;
            }

            if (Match::where('project_id', $project->id)
                ->where('freelancer_id', Auth::user()->freelancer->id)
                ->exists())
            {
                continue;
            }

            return $project;
        }

        return null;
    }

    public function projects()
    {
        $project = $this->findProjects();

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

            return redirect()->route('dashboard.matches');
        }
        else
        {
            Decision::create([
                'user_id' => Auth::id(),
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
            'user_id' => Auth::id(),
            'freelancer_id' => $profileId,
            'project_id' => $id,
            'decision' => 0,
        ]);

        return redirect()->route('dashboard.find.projects');
    }

    private function findFreelancers()
    {
        $freelancers = Freelancer::where('category', Auth::user()->projects()->first()->category)
            ->orderBy('updated_at', 'desc')
            ->get();

        foreach($freelancers as $freelancer)
        {
            if (Decision::where('project_id', Auth::user()->projects()->first()->id)
                ->where('freelancer_id', $freelancer->id)
                ->where('decision', 0)
                ->exists())
            {
                continue;
            }

            if (Match::where('project_id', Auth::user()->projects()->first()->id)
                ->where('freelancer_id', $freelancer->id)
                ->exists())
            {
                continue;
            }

            return $freelancer;
        }

        return null;
    }

    public function freelancers()
    {
        $profile = $this->findFreelancers();

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

            return redirect()->route('dashboard.matches');
        }
        else
        {
            Decision::create([
                'user_id' => Auth::id(),
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
            'user_id' => Auth::id(),
            'project_id' => $projectId,
            'freelancer_id' => $id,
            'decision' => 0,
        ]);

        return redirect()->route('dashboard.find.freelancers');
    }
}