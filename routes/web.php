<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MainController;
use App\Models\Card;
use Illuminate\Support\Facades\Route;

Route::controller(MainController::class)
    ->group(function () {
        Route::get("/", "index")->name("index");
    });
Route::controller(Card::class)
->group(function () {
    Route::get("/cards/{card}/show", "show")->name("card.show");
});
Route::middleware("auth")
->group(function () {
    Route::controller(FeedbackController::class)
    ->group(function ()
    {
        Route::get("/feedback", 'index')->name("feedback");
        Route::post("/feedback/store", 'store')->name("feedback.store");
    });
});

Route::view("/contacts", "contacts")->name("contacts");
Route::view("/about_us", "about_us")->name("about_us");


