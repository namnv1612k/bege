<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'relation_product_vs_category', 'product_id', 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Category', 'relation_product_vs_tag', 'product_id', 'tag_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function albums()
    {
        return $this->hasMany('App\Models\Album');
    }
}
