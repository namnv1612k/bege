<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    protected $table = 'credit_cards';

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
