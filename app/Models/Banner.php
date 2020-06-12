<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    public function product()
    {
        return $this->hasOne('App\Models\Product');
    }
}
