<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class men extends Model
{
    protected $table = 'men';
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
