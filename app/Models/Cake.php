<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    public $timestamps = false;
    protected $fillable =  [
        "image"
    ];
}
