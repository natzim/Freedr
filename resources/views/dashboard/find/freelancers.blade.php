@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Find freelancers</h4>
        </div>
    </div>
    <div class="container">
        @if (is_null($profile))
            <p>Sorry, there are no more freelancers in the queue. Try again in a bit.</p>
        @else
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ $profile->user->name }} <small>{{ $profile->title }}</small></span>
                    <p>{{ $profile->description }}</p>
                    <p>I charge {{ $profile->hourly_rate }} per hour</p>
                </div>
                <div class="card-action">
                    <a target="_blank" href="{{ route('dashboard.profile.portfolio', $profile) }}">Portfolio</a>
                    <a target="_blank" href="{{ route('dashboard.profile.reviews', $profile) }}">
                        Reviews
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
                    </a>
                </div>
            </div>
            <div class="center">
                <form method="post" action="{{ route('dashboard.find.freelancers.accept', $profile) }}">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="put">
                    <button class="btn waves-effect waves-light green">
                        <i class="mdi-navigation-check"></i>
                    </button>
                </form>
                <form method="post" action="{{ route('dashboard.find.freelancers.deny', $profile) }}">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="put">
                    <button class="btn waves-effect waves-light red">
                        <i class="mdi-navigation-close"></i>
                    </button>
                </form>
            </div>
        @endif
    </div>
@endsection