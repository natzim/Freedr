@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Dashboard</h4>
        </div>
    </div>
    <div class="container">
        <h4>Profile</h4>
        @if (is_null($profile))
            <p>Looks like you don't have a freelancer profile, why not <a href="{{ route('dashboard.profile.edit') }}">create one</a>?</p>
        @else
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ Auth::user()->name }} <small>{{ $profile->title }}</small></span>
                    <span class="badge teal white-text">{{ ucfirst($profile->category) }}</span>
                    <p>{{ $profile->description }}</p>
                    <p>I charge {{ $profile->hourly_rate }} per hour</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('dashboard.profile.portfolio', $profile) }}">Portfolio</a>
                    <a href="{{ route('dashboard.profile.reviews', $profile) }}">
                        Reviews
                        @if($profile->reviews()->count() > 0)
                            <?php
                            $averageRating = 0;
                            foreach($profile->reviews as $review)
                            {
                                $averageRating += $review->rating;
                            }
                            $averageRating = floor($averageRating / $profile->reviews()->count());
                            ?>
                            @for($i = 0; $i < $averageRating; $i++)
                                <i class="mdi-action-grade"></i>
                            @endfor
                        @endif
                    </a>
                </div>
            </div>
        @endif
        <h4>Projects</h4>
        @forelse($projects as $project)
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ $project->title }}</span>
                    <span class="badge teal white-text">{{ ucfirst($project->category) }}</span>
                    <p>{{ $project->description }}</p>
                    <p>{{ $project->price_range }} budget</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('dashboard.projects.show', $project) }}">View</a>
                    <a href="{{ route('dashboard.projects.edit', $project) }}">Edit</a>
                </div>
            </div>
        @empty
            <p>Looks like you don't have any projects, why not <a href="{{ route('dashboard.projects.create') }}">create one</a>?</p>
        @endforelse
    </div>
@endsection