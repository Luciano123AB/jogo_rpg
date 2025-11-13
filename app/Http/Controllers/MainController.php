<?php

namespace App\Http\Controllers;

use App\Models\Personagen;
use App\Models\Player;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
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

        return view("cadastro_atualizacao")
            ->with("imagem", "recrutamento")
            ->with("pagina", "Cadastro")
            ->with("personagens", $personagens);
    }

    public function atualizacao(): View {

        $personagens = Personagen::all();
        $id = session("player.id");
        $usuario = session("player.usuario");
        $senha = decrypt(session("player.senha"));
        $classe = session("player.personagem.classe");

        session([
            "alerta" => [
                "titulo" => "Atualização de Player",
                "texto" => "Aqui você editará os dados da sua conta e escolherá sua nova classe preferencial.",
                "pagina" => "atualizacao"
            ]
        ]);

        return view("cadastro_atualizacao")
            ->with("imagem", "recrutamento")
            ->with("pagina", "Atualização")
            ->with("personagens", $personagens)
            ->with([
                "dados" => [
                    "id" => $id,
                    "usuario" => $usuario,
                    "senha" => $senha,
                    "confirmar_senha" => $senha,
                    "classe" => $classe
                ]
            ]);
    }

    public function listagem() {

        $players = Player::all();

        session([
            "alerta" => [
                "titulo" => "Lista de Players",
                "texto" => "Aqui você vizualizará todos os players existentes e quem está na liderança.",
                "pagina" => "listagem"
            ]
        ]);

        return view("listagem_players")
            ->with("imagem", "recrutamento")
            ->with("pagina", "Listagem")
            ->with("players", $players);
    }
}