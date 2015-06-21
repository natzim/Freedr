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
                        <a href="{{ route('dashboard.projects.show', $freelancerMatch->project) }}">{{ $freelancerMatch->project->title }}</a>
                        <p>Email: <a href="mailto:{{ $freelancerMatch->project->user->email }}">{{ $freelancerMatch->project->user->email }}</a></p>
                    </li>
                @endforeach
            </ul>
        @endif
        <h4>Your projects</h4>
        @if ($projectMatches->isEmpty())
            <p class="flow-text">No new matches!</p>
        @else
            <ul class="collection">
                @foreach($projectMatches as $projectMatch)
                    <li class="collection-item">
                        <a href="{{ route('dashboard.profile.show', $projectMatch->freelancer) }}">{{ $projectMatch->freelancer->user->name }} <small>{{ $projectMatch->freelancer->title }}</small></a>
                        <p>Email: <a href="mailto:{{ $projectMatch->freelancer->user->email }}">{{ $projectMatch->freelancer->user->email }}</a></p>
                        <a class="btn waves-effect waves-light red" href="{{ route('dashboard.matches.reviews.new', $projectMatch->freelancer) }}">Leave a review</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection