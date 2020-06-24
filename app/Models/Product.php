<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $hidden = ['created_at', 'updated_at', 'is_active'];

    protected $fillable = ['name', 'price', 'sale_price', 'feature_image', 'stocks', 'slug', 'sku', 'intro', 'desc', 'views', 'supplier', 'is_active', 'rate'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'relation_product_vs_category', 'product_id', 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'relation_product_vs_tag', 'product_id', 'tag_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function albums()
    {
        return $this->hasMany('App\Models\Album');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier');
    }

    public function news()
    {
        return $this->hasOne('App\Models\News');
    }
}
