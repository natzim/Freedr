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

    public function accepted()
    {
        return $this->hasManyThrough('App\Decision', 'App\Freelancer')
            ->where('decision', 1);
    }

    public function rejected()
    {
        return $this->hasManyThrough('App\Decision', 'App\Freelancer')
            ->where('decision', 0);
    }

    public function matches()
    {
        return $this->hasManyThrough('App\Match', 'App\Freelancer');
    }
}
