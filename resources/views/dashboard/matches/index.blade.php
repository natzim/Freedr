@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Matches</h4>
        </div>
    </div>
    <div class="container">
        <h4>Your gigs</h4>
        @if (is_null($freelancerMatches))
            <p>No results!</p>
        @else
            <ul class="collection">
                @foreach($freelancerMatches as $freelancerMatch)
                    <li class="collection-item avatar">
                        <img src="{{ $freelancerMatch->project->user->image }}" class="circle">
                        <span class="title">{{ $freelancerMatch->project->title }}</span>
                        <p>Email: <a href="mailto:{{ $freelancerMatch->project->user->email }}">{{ $freelancerMatch->project->user->email }}</a></p>
                    </li>
                @endforeach
            </ul>
        @endif
        <h4>Your projects</h4>
        @if ($projectMatches->isEmpty())
            <p>No results!</p>
        @else
            <ul class="collection">
                @foreach($projectMatches as $projectMatch)
                    <li class="collection-item avatar">
                        <img src="{{ $projectMatch->freelancer->user->image }}" class="circle">
                        <span class="title">{{ $projectMatch->freelancer->user->name }}</span>
                        <a href="{{ route('dashboard.matches.reviews.new', $projectMatch->freelancer) }}">Leave a review</a>
                        <p>{{ $projectMatch->freelancer->title }}</p>
                        <p>Email: <a href="mailto:{{ $projectMatch->freelancer->user->email }}">{{ $projectMatch->freelancer->user->email }}</a></p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection