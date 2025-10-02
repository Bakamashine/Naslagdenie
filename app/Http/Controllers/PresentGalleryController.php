<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePresertGalleryRequest;
use App\Models\PresentGallery;
use App\Services\PresentService;
use Illuminate\Http\Request;

class PresentGalleryController extends Controller
{
    public function index()
    {
        $data = PresentGallery::all();
        return view("presents.index", ['data' => $data]);
    }

    public function create()
    {
        $data = PresentGallery::all();
        return view("presents.create", ['data' => $data]);
    }

    public function store(StorePresertGalleryRequest $request)
    {
        PresentService::AddPresent($request);
        return back();
    }

    public function delete(PresentGallery $presentGallery)
    {
        $presentGallery->delete();
        return back();
    }
}
