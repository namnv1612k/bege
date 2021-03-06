<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
