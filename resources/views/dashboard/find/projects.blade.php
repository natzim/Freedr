@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Find projects</h4>
        </div>
    </div>
    @if (is_null($project))
        <p>Sorry, there are no more projects for you to view. Try again in a bit.</p>
    @else
        <div class="container">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ $project->title }}</span>
                    <span class="badge teal white-text">{{ ucfirst($project->category) }}</span>
                    <p>{{ $project->description }}</p>
                    <p>{{ $project->price_range }} budget</p>
                </div>
            </div>
            <div class="center">
                <a class="btn waves-effect waves-light green" href="{{ route('dashboard.find.projects.accept', $project) }}">
                    <i class="mdi-navigation-check"></i>
                </a>
                <a class="btn waves-effect waves-light red" href="{{ route('dashboard.find.projects.deny', $project) }}">
                    <i class="mdi-navigation-close"></i>
                </a>
            </div>
        </div>
    @endif
@endsection