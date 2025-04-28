<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "user_id",
        "name",
        "mark",
        "serial",
        "price",
        "img",
        "status"
    ];
}
