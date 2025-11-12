<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Pest\Support\View;

class EditarDeletar extends Controller
{
    public function confirmarDeletar() {
        session([
            "alerta_confirmar" => [
                "titulo" => "Confirmar Deleção",
                "texto" => "Tem certeza que deseja deletar sua conta? Esse operação é irreversível.",
                "cancelar" => "cancelarDeletar",
                "sim" => "deletar"
            ]
        ]);

        return redirect()->back();
    }

    public function cancelar() {
        session()->forget(["alerta_confirmar"]);

        return redirect()->back();
    }

    public function deletar() {

        $id = session("player.id");
        
        $player_deletar = Player::findOrFail($id);
        $player_deletar->delete();

        if (!$player_deletar) {
            session()->forget(["alerta_confirmar"]);

            session([
                "alerta_erro" => [
                    "titulo" => "Erro ao Deletar!",
                    "texto" => "Ocorreu um erro ao tentar excluir a conta! Tente novamente."
                ]
            ]);

            return redirect()->back();
        } else {
            session()->forget(["alerta_confirmar"]);
            session()->forget(["player"]);

            session([
                "alerta_sucesso" => [
                    "titulo" => "Player Deletado com Sucesso!",
                    "texto" => "Caso queira começar novamente do zero, sinta-se à vontade para criar uma nova conta."
                ]
            ]);

            return view("index")
                ->with("imagem", "estrada")
                ->with("pagina", "Home");
        }
    }
}
