<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class women extends Model
{
    protected $table = 'women';
     protected $fillable = [
        'name',
        'image_url', 
        'reviews',
        'old_price',
        'new_price',
        'discount',
        'category'
    ];
}
