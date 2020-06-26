<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'username', 'avatar',
        'phone', 'address', 'points', 'payment_method', 'is_active', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function vouchers()
    {
        return $this->hasMany('App\Models\VoucherOwn');
    }

    public function wishlist()
    {
        return $this->hasMany('App\Models\Wishlist');
    }

    public function credit_card()
    {
        return $this->hasOne('App\Models\CreditCard');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
