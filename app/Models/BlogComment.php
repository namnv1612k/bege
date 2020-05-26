<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $table = 'blog_comments';

    public function blog()
    {
        return $this->belongsTo('App\Models\Blog');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
