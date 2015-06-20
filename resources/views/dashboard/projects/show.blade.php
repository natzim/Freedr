@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>{{ $project->title }}</h4>
        </div>
    </div>
    <div class="container">
        <a class="waves-effect waves-light btn" href="/dashboard/projects/{{ $project->id }}/edit">
            <i class="mdi-editor-mode-edit left"></i> Edit
        </a>
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{ $project->title }}</span>
                <span class="badge teal white-text">{{ ucfirst($project->category) }}</span>
                <p>{{ $project->description }}</p>
                <p>{{ $project->price_range }} budget</p>
            </div>
        </div>
    </div>
@endsection