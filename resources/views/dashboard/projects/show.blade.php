@extends('dashboard.master')

@section('content')
    <h2>{{ $project->title }}</h2>
    <a class="waves-effect waves-light btn" href="/dashboard/projects/{{ $project->id }}/edit">
        <i class="mdi-editor-mode-edit left"></i> Edit
    </a>
    <div class="card blue-grey darken-1">
        <div class="card-content white-text">
            <span class="card-title">{{ $project->title }}</span>
            <p>{{ $project->description }}</p>
            <p>{{ $project->price_range }} budget</p>
        </div>
    </div>
@endsection