<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Decision extends Model
{
    protected $table = 'decisions';

    protected $fillable = [
        'user_id',
        'freelancer_id',
        'project_id',
        'decision',
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
