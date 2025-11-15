<?php

namespace App\Http\Controllers;

use App\Models\Personagen;
use App\Models\Player;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Batalha extends Controller
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

    public function cancelarRender(): RedirectResponse {
        session()->forget("alerta_confirmar_render");

        return redirect()->back();
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

    public function renderSe(): RedirectResponse {
        session()->forget("alerta_confirmar_render");

        $id = session("player.id");
        
        $novo_player = Player::find($id);
        $novo_player->quantidade_derrotas = $novo_player->quantidade_derrotas + 1;
        $novo_player->save();

        session([
            "alerta_erro" => [
                "titulo" => "Derrota!",
                "texto" => "Não desista, faz parte continue tentando, não dá para ganhar todas."
            ]
        ]);

        return redirect()->route("preparacao");
    }
}
