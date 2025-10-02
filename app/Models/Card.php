<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        "image",
        "name",
        "description",
        "price"
    ];
}
