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
        'category',
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

    public function decisions()
    {
        return $this->hasMany('App\Decision');
    }

    public function matches()
    {
        return $this->hasMany('App\Match');
    }

    public function reviews()
    {
        return $this->hasMany('App\FreelancerReview');
    }
}
