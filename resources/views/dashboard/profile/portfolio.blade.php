@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>{{ $profile->user->name }}</h4>
        </div>
    </div>
    <div class="container">
        @if ($profile->user->id === Auth::id())
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a class="btn-floating btn-large waves-effect waves-light green" href="/dashboard/profile/{{ $profile->id }}/portfolio/add">
                    <i class="mdi-content-add"></i>
                </a>
            </div>
            <a class="btn waves-effect waves-light" href="/dashboard/profile">
                <i class="mdi-hardware-keyboard-arrow-left left"></i> Back to profile
            </a>
        @else
            <a class="btn waves-effect waves-light" href="/dashboard/profile/{{ $profile->id }}">
                <i class="mdi-hardware-keyboard-arrow-left left"></i> Back to profile
            </a>
        @endif
        @forelse($profile->portfolioItems as $item)
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ $item->image }}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{ $item->title }} <i class="mdi-navigation-more-vert right"></i></span>
                    <p><a href="{{ $item->link }}" target="_blank">Link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{ $item->title }} <i class="mdi-navigation-close right"></i></span>
                    <p>{{ $item->description }}</p>
                </div>
            </div>
        @empty
            <p>This freelancer has no work in their portfolio!</p>
        @endforelse
    </div>
@endsection