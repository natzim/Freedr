@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>{{ $profile->user->name }}</h4>
        </div>
    </div>
    <div class="container">
        @include('partials.profile', $profile)
    </div>
@endsection