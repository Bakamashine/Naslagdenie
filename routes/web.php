<?php

use App\Http\Controllers\CakeController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\DesertGalleryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MainController;
use App\Models\Card;
use App\Models\DesertGallery;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::controller(MainController::class)
    ->group(function () {
        Route::get("/", "index")->name("main");
    });
Route::controller(CardController::class)
    ->group(function () {
        Route::get("/cards/{card}/show", "show")->name("card.show");
    });
Route::middleware("auth")
    ->group(function () {
        Route::middleware("admin")
            ->group(function () {
                Route::view("/admin", "admin.index")->name("admin");

                Route::controller(DesertGalleryController::class)
                ->group(function () {
                    Route::get("/desert/create", 'create')->name("desert.create");
                    Route::post("/desert/store", 'store')->name("desert.store");
                    Route::delete("/desert/{desertGallery}/delete", 'delete')->name("desert.delete");
                });

                Route::controller(CakeController::class)
                ->group(function () {
                    Route::get("/cake/create", 'create')->name("cake.create");
                    Route::post("/cate/store", 'store')->name("cake.store");
                    Route::delete("/cake/{cake}/delete", 'delete')->name("cake.delete");
                });

                Route::controller(EmployeeController::class)
                    ->group(function () {
                        Route::get("/employee/create", 'create')->name("employee.create");
                        Route::post("/employee/store", 'store')->name("employee.store");
                        Route::delete("/employee/{employee}/delete", 'delete')->name("employee.delete");
                    });

                Route::controller(CardController::class)
                    ->group(function () {
                        Route::get("/card/create", 'create')->name("card.create");
                        Route::post("/card/store", 'store')->name("card.store");
                        Route::delete("/card/{card}/delete", 'delete')->name("card.delete");
                    });
            });

        Route::controller(FeedbackController::class)
            ->group(function () {
                Route::get("/feedback", 'index')->name("feedback");
                Route::post("/feedback/store", 'store')->name("feedback.store");
            });
    });

Route::view("/contacts", "contacts")->name("contacts");
Route::get("/cake", [CakeController::class, "index"])->name("cake");
Route::get("/desert", [DesertGalleryController::class, 'index'])->name("desert");

Route::get("/about_us", function () {
    $data = Employee::limit(4)->get();
    return view("about_us", ['data' => $data]);
})->name("about_us");


