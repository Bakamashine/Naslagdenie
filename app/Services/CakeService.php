<?php

namespace App\Services;

use App\Models\Cake;
use Illuminate\Http\Request;

class CakeService
{
    protected static string $storage_key = "Cakes";

    public static function AddCake(Request $request)
    {
        $urls = ImageService::UploadMoreImage($request, "image", self::$storage_key);
        if (!empty($urls)) {
            $data = [];
            foreach ($urls as $url) {
                $data[] = ["image" => $url];
            }

            Cake::insert($data);
        }
    }
}
