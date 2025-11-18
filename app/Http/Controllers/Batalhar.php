<?php

namespace App\Http\Controllers;

use App\Models\Batalha;
use App\Models\Personagem;
use App\Models\Player;
use App\Services\Randoms;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Batalhar extends Controller
{
    public function confirmarBatalha(Request $request): RedirectResponse {
        $request->validate(
            [
                "oponente" => "required|exists:personagems,id"
            ],

            [
                "oponente.required" => "Você deve escolher o seu oponente primeiro."
            ]
        );

        $id = $request->oponente;

        session([
            "alerta_confirmar" => [
                "titulo" => "Confirmar Batalha!",
                "texto" => "Tem certeza que está pronto para ir para a batalha?",
                "cancelar" => "cancelarBatalha",
                "sim" => "batalhar"
            ]
        ]);

        session([
            "id_oponente" => $id
        ]);

        return redirect()->back()->withInput();
    }

    public function cancelar(): RedirectResponse {
        session()->forget("alerta_confirmar");

        return redirect()->back();
    }

    public function atacar(Request $request): RedirectResponse {

        $skill_escolhida = $request->input("btnradio");

        if (!$skill_escolhida) {
            return redirect()->back()->withErrors(["skill" => "Escolha sua skill primeiro."]);
        }

        $id_batalha = session("dados.id_batalha");
        $id = session("player.personagem.id");
        $personagem = Personagem::find($id);       
        $nivel = session("player.nivel");
        
        $dano = Randoms::danoPlayerSorteado($personagem, $nivel, $skill_escolhida);

        if (session()->has(["skill01", "skill02", "skill03"])) {
            session()->forget(["skill01", "skill02", "skill03"]);
        }

        $batalha = Batalha::find($id_batalha);
        $batalha->hp_oponente = $batalha->hp_oponente - $dano;
        $batalha->vez = 1;
        $batalha->save();

        return redirect()->back()
            ->with("dano_desferido_player", $dano)
            ->with("dano_recebido_oponente", true);
    }

    public function ataqueOponente(): RedirectResponse {

        $id_batalha = session("dados.id_batalha");
        $id = session("dados.id_oponente");
        $personagem = Personagem::find($id);
        $nivel = session("player.nivel");
              
        $dano = Randoms::danoOponenteSorteado($personagem, $nivel);
        
        $batalha = Batalha::find($id_batalha);
        $batalha->hp = $batalha->hp - $dano;
        $batalha->vez = 0;
        $batalha->save();

        return redirect()->back()
            ->with("dano_desferido_oponente", $dano)
            ->with("dano_recebido_player", true);
    }

    public function confirmarRender(): RedirectResponse {
        session([
            "alerta_confirmar_render" => [
                "titulo" => "Confirmar Rendição!",
                "texto" => "Tem certeza que deseja desistir dessa batalha?",
                "cancelar" => "cancelarRender",
                "sim" => "renderSe"
            ]
        ]);

        return redirect()->back();
    }

    public function cancelarRender(): RedirectResponse {
        session()->forget("alerta_confirmar_render");

        return redirect()->back();
    }

    public function renderSe(): RedirectResponse {

        $id_batalha = session("dados.id_batalha");

        $batalha = Batalha::find($id_batalha);
        $batalha->ganhou = "Oponente";
        $batalha->updated_at = date("Y-m-d H:i:s");
        $batalha->save();

        session()->forget(["alerta_confirmar_render", "dados", "skill01", "skill02", "skill03"]);

        $id = session("player.id");
        
        $player = Player::find($id);
        $player->quantidade_derrotas = $player->quantidade_derrotas + 1;
        $player->save();
        
        session([
            "alerta_erro" => [
                "titulo" => "Derrota!",
                "texto" => "Não desista, faz parte continue tentando, não dá para ganhar todas."
            ]
        ]);

        return redirect()->route("preparacao");
    }
}
