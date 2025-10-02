<?php

namespace App\Services;

use App\Models\Card;
use Illuminate\Http\Request;

class CardService
{
    protected static string $storage_key = "Card";
    public static function AddCard(Request $request)
    {
        $url = ImageService::UploadImage($request, "image", self::$storage_key);
        if ($url) {
            Card::create([
                "image" => $url,
                "name" => $request->name,
                "description" => $request->description,
                "price" => $request->price
            ]);
        }
    }
}
