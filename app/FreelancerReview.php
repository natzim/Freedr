<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreelancerReview extends Model
{
    protected $table = 'freelancer_reviews';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function freelancer()
    {
        return $this->belongsTo('App\Freelancer');
    }
}
