<?php

namespace App\Http\Controllers;

use App\Models\Batalha;
use App\Models\Personagem;
use App\Models\Player;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    public function regras(): View {
        session([
            "alerta" => [
                "titulo" => "Regras do Jogo!",
                "texto" => "Aqui você entenderá como o jogo funciona.",
                "pagina" => "regras"
            ]
        ]);

        return view("regras")
            ->with("imagem", "campo_treinamento")
            ->with("pagina", "Regras");
    }

    public function sobreClasses(): View {

        $personagens = Personagem::all();

        session([
            "alerta" => [
                "titulo" => "Descrição das Classes!",
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
                "titulo" => "Créditos do Jogo!",
                "texto" => "Aqui você verá a lista de todos os desenvolvedores envolvidos.",
                "pagina" => "creditos"
            ]
        ]);

        return view("creditos")
            ->with("imagem", "estrada")
            ->with("pagina", "Créditos");
    }

    public function cadastro(): View {

        $personagens = Personagem::all();

        session([
            "alerta" => [
                "titulo" => "Cadastro de Player!",
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

        $personagens = Personagem::all();
        $id = session("player.id");
        $usuario = session("player.usuario");
        $senha = decrypt(session("player.senha"));
        $classe = session("player.personagem.classe");

        session([
            "alerta" => [
                "titulo" => "Atualização de Player!",
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

    public function listagem(): View {

        $players = Player::all();
        $player_lider_vitorias = Player::orderBy('quantidade_vitorias', 'desc')->first();
        $player_lider_nivel = Player::orderBy('nivel', 'desc')->first();

        session([
            "alerta" => [
                "titulo" => "Lista de Players!",
                "texto" => "Aqui você vizualizará todos os players existentes e quem está na liderança.",
                "pagina" => "listagem"
            ]
        ]);

        return view("listagem_players")
            ->with("imagem", "recrutamento")
            ->with("pagina", "Listagem")
            ->with("players", $players)
            ->with("player_lider_vitorias", $player_lider_vitorias)
            ->with("player_lider_nivel", $player_lider_nivel);
    }

    public function preparacao(): View {

        $id = session("player.id");
        $personagens = Personagem::all();
        $classe_player = session("player.personagem.classe");
        $nivel = Player::find($id);

        session([
            "alerta" => [
                "titulo" => "Preparação Antes da Batalha!",
                "texto" => "Aqui você escolherá quem irá enfrentar usando sua classe.",
                "pagina" => "preparacao"
            ]
        ]);

        return view("preparacao")
            ->with("imagem", "coliseu")
            ->with("pagina", "Preparação")
            ->with("personagens", $personagens)
            ->with("classe", $classe_player)
            ->with("nivel", $nivel->nivel);
    }

    public function batalhar(): View {
        session()->forget("alerta_confirmar");

        $id = session("id_oponente");
        $nivel = session("player.nivel");
        $oponente = Personagem::find($id);
        $vez = random_int(0, 1);
        
        $nova_batalha = new Batalha();
        $nova_batalha->hp = session("player.personagem.hp") * $nivel;
        $nova_batalha->hp_oponente = $oponente->hp * $nivel;
        $nova_batalha->vez = $vez;

        if (!session()->has("dados.batalha_comecou")) {
            $nova_batalha->save();
        }

        session([
            "dados" => [
                "id_oponente" => $oponente->id,
                "hp_maximo" => session("player.personagem.hp") * $nivel,
                "hp_oponente_maximo" => $oponente->hp * $nivel,
                "batalha_comecou" => true
            ]
        ]);

        $batalha = Batalha::find(1);

        session([
            "alerta" => [
                "titulo" => "Batalha!",
                "texto" => "Agora é a Hora! Aqui você aplicará o que aprendeu na página de regras.",
                "pagina" => "batalha"
            ]
        ]);

        return view("batalha")
            ->with("imagem", "coliseu")
            ->with("pagina", "Batalha")
            ->with("batalha", $batalha)
            ->with("oponente", $oponente);
    }
}