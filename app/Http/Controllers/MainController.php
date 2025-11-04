<?php

namespace App\Http\Controllers;

use App\Services\Boot;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(): View {
        if (!is_dir(base_path("node_modules"))) {
            Boot::dependencias();
        }

        session([
            "alerta_home" => [
                "titulo" => "Seja Muito Bem Vindo!",
                "texto" => "Faça seu cadastro caso ainda não tenha feito e divirta-se."
            ],
        ]);
        
        return view("index")
            ->with("imagem", "estrada.png")
            ->with("pagina", "Home");
    }
}