<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $table = 'freelancers';

    protected $fillable = [
        'user_id', // BAD!!!!
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
}
