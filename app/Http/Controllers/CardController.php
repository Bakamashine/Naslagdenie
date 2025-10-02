<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCardRequest;
use App\Models\Card;
use App\Services\CardService;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function show(Card $card)
    {
        return view("card.show", ["data" => $card]);
    }

    public function create()
    {
        $data = Card::all();
        return view("card.create", ["data"=> $data]);
    }

    public function store(StoreCardRequest $request)
    {
        CardService::AddCard($request);
        return back();
    }

    public function delete(Card $card)
    {
        $card->delete();
        return back();
    }
}
