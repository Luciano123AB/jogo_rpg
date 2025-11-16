<?php

namespace App\Http\Controllers;

use App\Models\Batalha;
use App\Models\Personagen;
use App\Models\Player;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Batalhar extends Controller
{
    public function confirmarBatalha(Request $request): RedirectResponse {
        $request->validate(
            [
                "oponente" => "required|exists:personagens,id"
            ],

            [
                "oponente.required" => "Você deve escolher o seu oponente primeiro."
            ]
        );

        $id = $request->oponente;

        session([
            "alerta_confirmar" => [
                "titulo" => "Confirmar Batalha",
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

        $id = session("player.personagem.id");
        $nivel = session("player.nivel");
        $personagem = Personagen::find($id);
        $skill01 = $personagem->skill01->skill;
        $skill02 = $personagem->skill02->skill;
        $skill03 = $personagem->skill03->skill;
        $danos_skill01 = [$personagem->skill01->dano01, $personagem->skill01->dano02, $personagem->skill01->dano03];
        $danos_skill02 = [$personagem->skill02->dano01, $personagem->skill02->dano02, $personagem->skill02->dano03];
        $danos_skill03 = [$personagem->skill03->dano01, $personagem->skill03->dano02, $personagem->skill03->dano03];
        $dano01_sorteado = $danos_skill01[array_rand($danos_skill01)];
        $dano02_sorteado = $danos_skill02[array_rand($danos_skill02)];
        $dano03_sorteado = $danos_skill03[array_rand($danos_skill03)];
        
        $batalha = Batalha::find(1);
        $dano = "";

        switch ($skill_escolhida) {
            case "$skill01":
                $dano = $dano01_sorteado * $nivel;
                session(["skill01" => true]);
            break;

            case "$skill02":
                $dano = $dano02_sorteado * $nivel;
                session(["skill02" => true]);
            break;

            case "$skill03":
                $dano = $dano03_sorteado * $nivel;
                session(["skill03" => true]);
            break;
        }

        if (session()->has(["skill01", "skill02", "skill03"])) {
            session()->forget(["skill01", "skill02", "skill03"]);
        }

        $batalha->hp_oponente = $batalha->hp_oponente - $dano;
        $batalha->vez = 1;
        $batalha->save();

        return redirect()->back()->with("dano_desferido", $dano);
    }

    public function ataqueOponente(): RedirectResponse {

        $id = session("dados.id_oponente");
        $nivel = session("player.nivel");
        $personagem = Personagen::find($id);
        $skill01 = $personagem->skill01->skill;
        $skill02 = $personagem->skill02->skill;
        $skill03 = $personagem->skill03->skill;
        $skills = [$skill01, $skill02, $skill03];
        $danos_skill01 = [$personagem->skill01->dano01, $personagem->skill01->dano02, $personagem->skill01->dano03];
        $danos_skill02 = [$personagem->skill02->dano01, $personagem->skill02->dano02, $personagem->skill02->dano03];
        $danos_skill03 = [$personagem->skill03->dano01, $personagem->skill03->dano02, $personagem->skill03->dano03];
        $skill_sorteado = $skills[array_rand($skills)];
        $dano01_sorteado = $danos_skill01[array_rand($danos_skill01)];
        $dano02_sorteado = $danos_skill02[array_rand($danos_skill02)];
        $dano03_sorteado = $danos_skill03[array_rand($danos_skill03)];

        $batalha = Batalha::find(1);
        $dano = "";

        switch ($skill_sorteado) {
            case "$skill01":
                $dano = $dano01_sorteado * $nivel;
            break;

            case "$skill02":
                $dano = $dano02_sorteado * $nivel;
            break;

            case "$skill03":
                $dano = $dano03_sorteado * $nivel;
            break;
        }

        $batalha->hp = $batalha->hp - $dano;
        $batalha->vez = 0;
        $batalha->save();

        return redirect()->back()->with("dano_recebido", $dano);
    }

    public function confirmarRender(): RedirectResponse {
        session([
            "alerta_confirmar_render" => [
                "titulo" => "Confirmar Rendição",
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
        session()->forget(["alerta_confirmar_render", "dados", "skill01", "skill02", "skill03"]);

        $id = session("player.id");
        
        $player = Player::find($id);
        $player->quantidade_derrotas = $player->quantidade_derrotas + 1;
        $player->save();

        Batalha::truncate();
        
        session([
            "alerta_erro" => [
                "titulo" => "Derrota!",
                "texto" => "Não desista, faz parte continue tentando, não dá para ganhar todas."
            ]
        ]);

        return redirect()->route("preparacao");
    }
}
