@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Dashboard</h4>
        </div>
    </div>
    <div class="container">
        <h4>Your profile</h4>
        @if (is_null($profile))
            <p class="flow-text">Looks like you don't have a freelancer profile, why not <a href="{{ route('dashboard.profile.edit') }}">create one</a>?</p>
        @else
            @include('partials.profile', $profile)
        @endif
        <h4>Your projects</h4>
        @forelse($projects as $project)
            @include('partials.project', ['project' => $project, 'owns' => true])
        @empty
            <p class="flow-text">Looks like you don't have any projects, why not <a href="{{ route('dashboard.projects.create') }}">create one</a>?</p>
        @endforelse
    </div>
@endsection