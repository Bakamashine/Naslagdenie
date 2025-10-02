<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;

class BaseService
{


    /**
     *
     * Заполняет различные галереии
     * @param \Illuminate\Http\Request $request
     * @param class-string $class
     * @return void
     */
    protected static function Add(Request $request, string $class, string $storage_key)
    {
        // if (!isset(self::$storage_key)) {
        //     throw new Exception("Storage key is null");
        // }
        $urls = ImageService::UploadMoreImage($request, "image", $storage_key);
        if (!empty($urls)) {
            $data = [];
            foreach ($urls as $url) {
                $data[] = ["image" => $url];
            }

            $class::insert($data);
        }
    }
}
