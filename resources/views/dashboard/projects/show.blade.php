@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>{{ $project->title }}</h4>
        </div>
    </div>
    <div class="container">
        <a class="btn waves-effect waves-light" href="{{ route('dashboard.projects') }}">
            <i class="mdi-hardware-keyboard-arrow-left left"></i> Back to projects
        </a>
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{ route('dashboard.projects.edit', $project) }}">
                <i class="mdi-editor-mode-edit"></i>
            </a>
        </div>
        @include('partials.project', $project)
    </div>
@endsection