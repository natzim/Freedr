<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'matches';

    protected $fillable = [
        'freelancer_id',
        'project_id',
    ];

    public function freelancer()
    {
        return $this->belongsTo('App\Freelancer');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
