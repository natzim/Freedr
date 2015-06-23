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
            @include('partials.project', ['project' => $project, 'owns' => true])
        @empty
            <p class="flow-text">Looks like you don't have any projects, why not <a href="{{ route('dashboard.projects.create') }}">create one</a>?</p>
        @endforelse
    </div>
@endsection