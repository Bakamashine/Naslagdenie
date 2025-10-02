<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = Card::all();
        return view("index", ['data' => $data]);
    }
}
