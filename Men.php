<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Men extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'men';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image_url',
        'reviews',
        'old_price',
        'new_price',
        'discount',
        'category'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'old_price' => 'decimal:2',
        'new_price' => 'decimal:2',
        'reviews' => 'integer'
    ];
}