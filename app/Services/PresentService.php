<?php

namespace App\Services;

use App\Models\PresentGallery;
use Illuminate\Http\Request;

class PresentService extends BaseService
{
    protected static string $storage_key = "Cakes";

    public static function AddPresent(Request $request)
    {
        static::Add($request, PresentGallery::class, self::$storage_key);
    }
}
