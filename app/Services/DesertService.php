<?php

namespace App\Services;

use App\Models\DesertGallery;
use Illuminate\Http\Request;

class DesertService extends BaseService
{

    protected static string $storage_key = "Desert";

    public static function AddDesert(Request $request)
    {
        static::Add($request, DesertGallery::class, self::$storage_key);
    }
}
