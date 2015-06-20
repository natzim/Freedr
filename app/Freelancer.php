<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $table = 'freelancers';

    protected $fillable = [
        'title',
        'description',
        'hourly_rate',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function review()
    {
        return $this->hasMany('App\FreelancerReview');
    }

    public function portfolioItems()
    {
        return $this->hasMany('App\PortfolioItem');
    }

    public function accepted()
    {
        return $this->hasManyThrough('App\Decision', 'App\Project')
            ->where('decision', 1);
    }

    public function rejected()
    {
        return $this->hasManyThrough('App\Decision', 'App\Project')
            ->where('decision', 0);
    }

    public function matches()
    {
        return $this->hasManyThrough('App\Match', 'App\Project');
    }
}
