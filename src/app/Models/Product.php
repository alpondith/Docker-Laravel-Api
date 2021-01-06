<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'rating',
        'quantity',
        'category'
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

}
