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
            <p class="flow-text">Looks like you haven't set up a freelancer profile yet. Why don't you <a href="{{ route('dashboard.profile.edit') }}">set one up</a>?</p>
        @else
            @include('partials.profile', $profile)
            <p class="flow-text">This is how your profile will appear to other people.</p>
        @endif
    </div>
@endsection