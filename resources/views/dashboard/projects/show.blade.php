@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>{{ $project->title }}</h4>
        </div>
    </div>
    <div class="container">
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{ route('dashboard.projects.edit', $project) }}">
                <i class="mdi-editor-mode-edit"></i>
            </a>
        </div>
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{ $project->title }}</span>
                <span class="badge teal white-text">{{ ucfirst($project->category) }}</span>
                <p>{{ $project->description }}</p>
                <p>{{ $project->price_range }} budget</p>
            </div>
        </div>
        <p>This is how your project will appear to other people.</p>
    </div>
@endsection