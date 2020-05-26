<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DealHot extends Model
{
    protected $table = 'deal_hot';

    public function product()
    {
        return $this->hasOne('App\Models\Product');
    }
}
