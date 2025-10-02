<?php

namespace App\Models;

use App\Http\Requests\StoreDesertGalleryRequest;
use Illuminate\Database\Eloquent\Model;

class DesertGallery extends Model
{
    public $timestamps = false;
    protected $fillable = [
        "image"
    ];
}
