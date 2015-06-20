<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $table = 'freelancers';

    public function review()
    {
        return $this->hasMany('App\FreelancerReview');
    }

    public function portfolioItems()
    {
        return $this->hasMany('App\PortfolioItem');
    }
}
