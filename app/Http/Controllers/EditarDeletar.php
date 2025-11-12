<?php

namespace App\Http\Controllers;

use App\Models\Player;

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

    public function cancelarDeletar() {
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

            return redirect()->route("home");
        }
    }

    public function confirmarAtualizar() {
        session([
            "alerta_confirmar" => [
                "titulo" => "Confirmar Atualização",
                "texto" => "Tem certeza que deseja salvar esses novos dados?",
                "cancelar" => "cancelarAtualizar",
                "sim" => "atualizar"
            ]
        ]);

        return redirect()->back();
    }

    public function cancelarAtualizar() {
        session()->forget(["alerta_confirmar"]);

        return redirect()->back();
    }

    public function atualizar() {

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

            return redirect()->route("home");
        }
    }
}
