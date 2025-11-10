<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class LogarSair extends Controller
{
    public function logar(Request $request) {
        $request->validate(
            [
                "usuario" => "required",
                "senha" => "required"
            ],

            [
                "usuario.required" => "O campo usuário é obrigatório.",
                "senha.required" => "O campo senha é obrigatório."
            ]
        );

        $usuario = $request->input("usuario");
        $senha = $request->input("senha");
        $player = Player::where("usuario", $usuario)
                                 ->where("senha", $senha)
                                 ->first();

        if (!$player) {
            return redirect()->back()->withInput()->withErrors(["playerNaoExiste" => "Esse player não está cadastrado! Tente novamente."]);
        }

        session([
            "player" => $player,

            "alerta_login_sucesso" => [
                "titulo" => "Login Efetuado com Sucesso!",
                "texto" => "Agora você pode acessar a página de batalha."
            ]
        ]);

        return view("index")
            ->with("imagem", "estrada")
            ->with("pagina", "Home");
    }

    public function confirmarSair() {
        session([
            "alerta_confirmar_sair" => [
                "titulo" => "Confirmar Saída",
                "texto" => "Tem certeza que deseja sair?"
            ]
        ]);

        return redirect()->back();
    }

    public function sair() {
        session()->forget(["player"]);

        return view("index")
            ->with("imagem", "estrada")
            ->with("pagina", "Home");
    }
}
