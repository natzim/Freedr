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
            <p class="flow-text">No new matches!</p>
        @else
            <ul class="collection">
                @foreach($freelancerMatches as $freelancerMatch)
                    <li class="collection-item">
                        <a href="{{ route('dashboard.projects.show', $freelancerMatch->project) }}"><h5>{{ $freelancerMatch->project->title }}</h5></a>
                        <a href="{{ route('dashboard.profile.show', $freelancerMatch->project->user) }}">{{ $freelancerMatch->project->user->name }}</a><br>
                        <a class="btn waves-effect waves-light red" href="{{ route('dashboard.matches.chat', $freelancerMatch) }}">Chat</a>
                    </li>
                @endforeach
            </ul>
        @endif
        <h4>Your projects</h4>
        @if (is_null($projectMatches) || $projectMatches->isEmpty())
            <p class="flow-text">No new matches!</p>
        @else
            <ul class="collection">
                @foreach($projectMatches as $projectMatch)
                    <li class="collection-item">
                        <a href="{{ route('dashboard.profile.show', $projectMatch->freelancer) }}"><h5>{{ $projectMatch->freelancer->user->name }} <small>{{ $projectMatch->freelancer->title }}</small></h5></a>
                        <a class="btn waves-effect waves-light blue" href="{{ route('dashboard.matches.reviews.new', $projectMatch->freelancer) }}">Leave a review</a>
                        <a class="btn waves-effect waves-light red" href="{{ route('dashboard.matches.chat', $projectMatch) }}">Chat</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection