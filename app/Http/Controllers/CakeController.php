<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCakeRequest;
use App\Models\Cake;
use App\Services\CakeService;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    public function index()
    {
        $data = Cake::all();
        return view("cakes/index", ["data" => $data]);
    }

    public function create()
    {
        $data = Cake::all();
        return view("cakes/create", ["data" => $data]);
    }

    public function store(StoreCakeRequest $request)
    {
        CakeService::AddCake($request);
        return back();
    }

    public function delete(Cake $cake)
    {
        $cake->delete();
        return back();
    }
}
