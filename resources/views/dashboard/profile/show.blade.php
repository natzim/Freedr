@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>{{ $profile->user->name }}</h4>
        </div>
    </div>
    <div class="container">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{ $profile->user->name }} <small>{{ $profile->title }}</small></span>
                <span class="badge teal white-text">{{ ucfirst($profile->category) }}</span>
                <p>{{ $profile->description }}</p>
                <p>I charge {{ $profile->hourly_rate }} per hour</p>
            </div>
            <div class="card-action">
                <a href="{{ route('dashboard.profile.portfolio', $profile) }}">Portfolio</a>
                <a href="{{ route('dashboard.profile.reviews', $profile) }}">Reviews</a>
            </div>
        </div>
    </div>
@endsection