@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <h4>Projects</h4>
    </div>
    <div class="container">
        <a class="waves-effect waves-light btn" href="/dashboard/projects/create">
            <i class="mdi-content-add left"></i> Create
        </a>
        @forelse($projects as $project)
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ $project->title }}</span>
                    <p>{{ $project->description }}</p>
                    <p>{{ $project->price_range }} budget</p>
                </div>
                <div class="card-action">
                    <a href="/dashboard/projects/{{ $project->id }}">View</a>
                    <a href="/dashboard/projects/{{ $project->id }}/edit">Edit</a>
                </div>
            </div>
        @empty
            <p>Looks like you don't have any projects, why not <a href="/dashboard/projects/create">create one</a>?</p>
        @endforelse
    </div>
@endsection