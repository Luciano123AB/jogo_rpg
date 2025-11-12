<?php

namespace App\Http\Controllers;

use App\Models\Personagen;
use App\Services\Boot;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    public function home(): View {

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
    }

    public function regras(): View {
        session([
            "alerta" => [
                "titulo" => "Regras do Jogo",
                "texto" => "Aqui você entenderá como o jogo funciona.",
                "pagina" => "regras"
            ]
        ]);

        return view("regras")
            ->with("imagem", "campo_treinamento")
            ->with("pagina", "Regras");
    }

    public function sobreClasses(): View {

        $personagens = Personagen::all();

        session([
            "alerta" => [
                "titulo" => "Descrição das Classes",
                "texto" => "Aqui você vai entender como cada classe funciona.",
                "pagina" => "sobre"
            ]
        ]);

        return view("sobre_classes")
            ->with("imagem", "estatuas_classes")
            ->with("pagina", "Descrições")
            ->with("personagens", $personagens);
    }

    public function creditos(): View {
        session([
            "alerta" => [
                "titulo" => "Créditos do Jogo",
                "texto" => "Aqui você verá a lista de todos os desenvolvedores envolvidos.",
                "pagina" => "creditos"
            ]
        ]);

        return view("creditos")
            ->with("imagem", "estrada")
            ->with("pagina", "Créditos");
    }

    public function cadastro(): View {

        $personagens = Personagen::all();

        session([
            "alerta" => [
                "titulo" => "Cadastro de Player",
                "texto" => "Aqui você criará sua conta e escolherá sua classe preferencial.",
                "pagina" => "cadastro"
            ]
        ]);

        return view("cadastro")
            ->with("imagem", "recrutamento")
            ->with("pagina", "Cadastro")
            ->with("personagens", $personagens);
    }
}