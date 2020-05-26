<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';

    public function product()
    {
        return $this->hasOne('App\Models\Product');
    }
}
