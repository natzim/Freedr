<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }

    public function freelancers()
    {
        return $this->belongsToMany('App\Freelancer');
    }
}
