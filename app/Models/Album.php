<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album_image_product';

    protected $fillable = ['product_id', 'image', 'sort'];

    public $timestamps = false;
}
