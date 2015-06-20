@extends('dashboard.master')

@section('content')
    <h1>Profile</h1>
    <a class="waves-effect waves-light btn" href="/dashboard/profile/edit">
        <i class="mdi-editor-mode-edit left"></i> Edit
    </a>
    @if (is_null($profile))
        <p>Looks like you haven't set up a freelancer profile yet. Why don't you <a href="/dashboard/profile/edit">set one up</a>?</p>
    @else
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{ Auth::user()->name }} - {{ $profile->title }}</span>
                <p>{{ $profile->description }}</p>
                <p>{{ $profile->hourly_rate }} per hour</p>
            </div>
            <div class="card-action">
                <a href="#">Portfolio</a>
                <a href="#">Reviews</a>
            </div>
        </div>
    @endif
@endsection