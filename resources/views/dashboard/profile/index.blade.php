@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Profile</h4>
        </div>
    </div>
    <div class="container">
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{ route('dashboard.profile.edit') }}">
                <i class="mdi-editor-mode-edit"></i>
            </a>
        </div>
        @if (is_null($profile))
            <p>Looks like you haven't set up a freelancer profile yet. Why don't you <a href="{{ route('dashboard.profile.edit') }}">set one up</a>?</p>
        @else
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ Auth::user()->name }} - {{ $profile->title }}</span>
                    <span class="badge teal white-text">{{ ucfirst($profile->category) }}</span>
                    <p>{{ $profile->description }}</p>
                    <p>{{ $profile->hourly_rate }} per hour</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('dashboard.profile.portfolio', $profile) }}">Portfolio</a>
                    <a href="#">Reviews</a>
                </div>
            </div>
            <p>This is how your profile will appear to other people.</p>
        @endif
    </div>
@endsection