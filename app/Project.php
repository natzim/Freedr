<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'title',
        'description',
        'price_range',
        'category',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function decisions()
    {
        return $this->hasMany('App\Decision');
    }

    public function matches()
    {
        return $this->hasManyThrough('App\Match', 'App\Freelancer');
    }
}
