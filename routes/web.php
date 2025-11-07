<?php

use App\Http\Controllers\AudiosTemas;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::prefix("/")->group(function () {
    Route::controller(AudiosTemas::class)->group(function() {
        Route::get("tocar_musica", "tocarMusica")->name("musica");

        Route::get("mudar_tema", "mudarTema")->name("tema");
    });
});

Route::prefix("/")->group(function () {
    Route::controller(MainController::class)->group(function() {
        Route::get("", "home")->name("home");

        Route::get("regras", "regras")->name("regras");
        
        Route::get("sobre_classes", "sobreClasses")->name("sobre");

        Route::get("creditos", "creditos")->name("creditos");
    });
});