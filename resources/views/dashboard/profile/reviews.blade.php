@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>{{ $profile->user->name }}'s reviews</h4>
        </div>
    </div>
    <div class="container">
        @if ($profile->user->id === Auth::id())
            <a class="btn waves-effect waves-light" href="{{ route('dashboard.profile') }}">
                <i class="mdi-hardware-keyboard-arrow-left left"></i> Back to profile
            </a>
        @else
            <a class="btn waves-effect waves-light" href="{{ route('dashboard.profile.show', $profile) }}">
                <i class="mdi-hardware-keyboard-arrow-left left"></i> Back to profile
            </a>
        @endif
        @forelse($profile->reviews as $review)
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ $review->user->name }}</span>
                    <p>{{ $review->rating }}/5</p>
                    <p>{{ $review->description }}</p>
                </div>
            </div>
        @empty
            <p>This freelancer has no reviews!</p>
        @endforelse
    </div>
@endsection