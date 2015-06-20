@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Find freelancers</h4>
        </div>
    </div>
    <div class="container">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{ $profile->user->name }} - {{ $profile->title }}</span>
                <p>{{ $profile->description }}</p>
                <p>{{ $profile->hourly_rate }} per hour</p>
            </div>
            <div class="card-action">
                <a target="_blank" href="/dashboard/profile/{{ $profile->id }}/portfolio">Portfolio</a>
                <a target="_blank" href="#">Reviews</a>
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