<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'number',
        'price',
        'category_id',
    ];

    public function products() {
        return $this->hasMany(Category::class);
    }
}
