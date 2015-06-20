@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Find projects</h4>
        </div>
    </div>
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
            <a class="btn waves-effect waves-light green" href="#">
                <i class="mdi-navigation-check"></i>
            </a>
            <a class="btn waves-effect waves-light red" href="#">
                <i class="mdi-navigation-close"></i>
            </a>
        </div>
    </div>
@endsection