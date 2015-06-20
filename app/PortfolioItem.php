<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $table = 'portfolio_items';

    protected $fillable = [
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
