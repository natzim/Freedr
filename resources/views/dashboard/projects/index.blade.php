@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Projects</h4>
        </div>
    </div>
    <div class="container">
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large waves-effect waves-light green" href="{{ route('dashboard.projects.create') }}">
                <i class="mdi-content-add"></i>
            </a>
        </div>
        @forelse($projects as $project)
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ $project->title }}</span>
                    <span class="badge teal white-text">{{ ucfirst($project->category) }}</span>
                    <p>{{ $project->description }}</p>
                    <p>{{ $project->price_range }} budget</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('dashboard.projects.show', $project) }}">View</a>
                    <a href="{{ route('dashboard.projects.edit', $project) }}">Edit</a>
                </div>
            </div>
        @empty
            <p>Looks like you don't have any projects, why not <a href="{{ route('dashboard.projects.create') }}">create one</a>?</p>
        @endforelse
    </div>
@endsection