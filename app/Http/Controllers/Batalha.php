<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Contracts\View\View;

class Batalha extends Controller
{
    public function confirmarBatalha() {
        session([
            "alerta_confirmar" => [
                "titulo" => "Confirmar Batalha",
                "texto" => "Tem certeza que está pronto para ir para a batalha?",
                "cancelar" => "cancelarBatalha",
                "sim" => "batalhar"
            ]
        ]);

        return redirect()->back();
    }

    public function cancelar() {
        session()->forget("alerta_confirmar");

        return redirect()->back();
    }

    public function batalhar(): View {
        session([
            "alerta" => [
                "titulo" => "Batalha",
                "texto" => "Agora é a Hora! Aqui você aplicará o que aprendeu na página de regras.",
                "pagina" => "batalha"
            ]
        ]);

        return view("batalha")
            ->with("imagem", "coliseu")
            ->with("pagina", "Batalha");
    }

    public function renderSe() {

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

        return redirect()->route("home");
    }
}
