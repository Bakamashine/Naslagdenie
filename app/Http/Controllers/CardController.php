<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function show(Card $card)
    {
        return view("card.detail", ["data" => $card]);
    }
}
