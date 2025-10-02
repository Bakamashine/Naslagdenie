<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;
use Storage;

class ImageService
{
    /**
     * Загрузка большого кол-ва изображения в public/products
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public static function UploadMoreImage(Request $request, string $key, string $path)
    {
        $urls = [];
        if ($request->hasFile($key)) {
            foreach ($request->file($key) as $file) {
                $urls[] = Storage::url($file->store($path, 'public'));
            }
        }
        if ($urls)
            return $urls;
        throw new Exception('Files not found!');
    }

    /**
     * Загрузка изображения в public/products
     * @param \Illuminate\Http\Request $request
     * @throws \Exception
     * @return string
     */
    public static function UploadImage(Request $request, string $key, string $path)
    {
        if ($request->hasFile($key)) {
            $url = Storage::url(
                $request->file($key)->store($path, "public"));
            return $url;
        }
        throw new Exception('File not found!');
    }
}
