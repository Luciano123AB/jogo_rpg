<?php

use App\Http\Controllers\MainController;
use App\Http\Middleware\Checar;
use Illuminate\Support\Facades\Route;

Route::get("/", [MainController::class, "home"])->name("Home");

Route::middleware([Checar::class])->group(function() {
    Route::prefix("/")->group(function () {
        //
    });
});
