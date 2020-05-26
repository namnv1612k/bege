<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    public function categories()
    {
        return $this->belongsToMany('App\Models\BlogCategory', 'relation_blog_vs_category', 'blog_id', 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'relation_blog_vs_tag', 'blog_id', 'tag_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\BlogComment');
    }
}
