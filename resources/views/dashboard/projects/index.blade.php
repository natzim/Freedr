@extends('dashboard.master')

@section('content')
    <h2>Projects</h2>
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
@endsection