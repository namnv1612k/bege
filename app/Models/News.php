<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
}
