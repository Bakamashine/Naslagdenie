<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDesertGalleryRequest;
use App\Models\DesertGallery;
use App\Services\DesertService;
use Illuminate\Http\Request;

class DesertGalleryController extends Controller
{
    public function index()
    {
        $data = DesertGallery::all();
        return view("deserts.index", ['data' => $data]);
    }

    public function create()
    {
        $data = DesertGallery::all();
        return view("deserts.create", ['data' => $data]);
    }

    public function store(StoreDesertGalleryRequest $request)
    {
        DesertService::AddDesert($request);
        return back();
    }

    public function delete(DesertGallery $desertGallery)
    {
        $desertGallery->delete();
        return back();
    }
}
