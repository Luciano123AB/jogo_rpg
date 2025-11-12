<?php

use App\Http\Controllers\AudiosTemas;
use App\Http\Controllers\Cadastrar;
use App\Http\Controllers\LogarSair;
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

        Route::get("cadastro", "cadastro")->name("cadastro");
    });

    Route::controller(Cadastrar::class)->group(function() {        
        Route::post("confirmar_cadastrar", "confirmarCadastrar")->name("confirmarCadastrar");
        Route::get("cancelar_cadastrar", "cancelar")->name("cancelarCadastrar");
        Route::get("cadastro_submit", "cadastroSubmit")->name("cadastrar");
    });

    Route::controller(LogarSair::class)->group(function() {
        Route::post("logar", "logar")->name("logar");

        Route::get("confirmar_sair", "confirmarSair")->name("confirmarSair");
        Route::get("cancelar_sair", "cancelar")->name("cancelarSair");
        Route::get("sair", "sair")->name("sair");
    });
});