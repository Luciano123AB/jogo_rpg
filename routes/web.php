<?php

use App\Http\Controllers\AudiosTemas;
use App\Http\Controllers\Cadastrar;
use App\Http\Controllers\EditarDeletar;
use App\Http\Controllers\LogarSair;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Batalha;
use App\Http\Middleware\VerificarLogado;
use App\Services\Boot;
use Illuminate\Support\Facades\Route;

Route::prefix("/")->group(function () {
    Route::controller(AudiosTemas::class)->group(function() {
        Route::get("tocar_musica", "tocarMusica")->name("musica");
    
        Route::get("mudar_tema", "mudarTema")->name("tema");
    });

    Route::controller(MainController::class)->group(function() {
        Route::get("", function() {
            $banco = Boot::testarConexao();
        
            if ($banco == false) {
                Boot::criarPovoarBanco();
            }
            
            if (!is_dir(base_path("node_modules"))) {
                Boot::dependencias();
            }

            session([
                "alerta" => [
                    "titulo" => "Seja Muito Bem Vindo!",
                    "texto" => "Faça seu cadastro caso ainda não tenha feito e divirta-se.",
                    "pagina" => "home"
                ],
            ]);
            
            return view("index")
                ->with("imagem", "estrada")
                ->with("pagina", "Home");
        })->name("home");

        Route::get("regras", "regras")->name("regras");
        
        Route::get("sobre_classes", "sobreClasses")->name("sobre");

        Route::get("creditos", "creditos")->name("creditos");

        Route::get("cadastro", "cadastro")->name("cadastro");

        Route::get("atualizacao", "atualizacao")->name("atualizacao");

        Route::middleware(VerificarLogado::class)->group(function() {
            Route::get("listagem", "listagem")->name("listagem");
    
            Route::get("preparacao", "preparacao")->name("preparacao");
            Route::get("batalha", "batalhar")->name("batalhar");
        });
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

    Route::controller(EditarDeletar::class)->group(function() {
        Route::post("confirmar_atualizar", "confirmarAtualizar")->name("confirmarAtualizar");
        Route::get("cancelar_atualizar", "cancelarAtualizar")->name("cancelarAtualizar");
        Route::get("atualizar", "atualizar")->name("atualizar");

        Route::get("confirmar_deletar", "confirmarDeletar")->name("confirmarDeletar");
        Route::get("cancelar_deletar", "cancelarDeletar")->name("cancelarDeletar");
        Route::get("deletar", "deletar")->name("deletar");        
    });

    Route::controller(Batalha::class)->group(function() {
        Route::middleware(VerificarLogado::class)->group(function() {
            Route::get("confirmar_batalha", "confirmarBatalha")->name("confirmarBatalha");
            Route::get("cancelar_batalha", "cancelar")->name("cancelarBatalha");
            Route::get("confirmar_render", "confirmarRender")->name("confirmarRender");
            Route::get("cancelar_render", "cancelarRender")->name("cancelarRender");
            Route::get("render_se", "renderSe")->name("renderSe");
        });
    });
});