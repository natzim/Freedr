<div class="card grey lighten-4">
    <div class="card-content">
        <span class="card-title black-text">{{ $profile->user->name }} <small>{{ $profile->title }}</small></span>
        <span class="badge red white-text z-depth-1">{{ ucfirst($profile->category) }}</span>
        <p>{{ $profile->description }}</p>
        <p>I charge {{ $profile->hourly_rate }} per hour</p>
    </div>
    <div class="card-action">
        <a class="btn waves-effect waves-light red white-text" href="{{ route('dashboard.profile.portfolio', $profile) }}">Portfolio</a>
        <a class="btn waves-effect waves-light red white-text" href="{{ route('dashboard.profile.reviews', $profile) }}">
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