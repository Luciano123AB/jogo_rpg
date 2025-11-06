<?php

use App\Http\Controllers\Audios;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::prefix("/")->group(function () {
    Route::controller(Audios::class)->group(function() {
        Route::get("musica_normal", "musicaNormal")->name("musicaNormal");
    });
});

Route::prefix("/")->group(function () {
    Route::controller(MainController::class)->group(function() {
        Route::get("", "home")->name("home");
        
        Route::get("sobre_classes", "sobreClasses")->name("sobre");

        Route::get("creditos", "creditos")->name("creditos");
    });
});