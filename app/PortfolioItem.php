<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $table = 'portfolio_items';

    protected $fillable = [
        'freelancer_id', // BAD!!!
        'description',
        'title',
        'image',
        'link',
    ];

    public function freelancer()
    {
        return $this->belongsTo('App\Freelancer');
    }
}
