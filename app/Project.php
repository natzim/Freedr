<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'user_id', // TERRIBLE IDEA!!!
        'title',
        'description',
        'price_range',
        'category',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
