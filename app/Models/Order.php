<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function details()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }
}
