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
                        ->first();
        $player_senha = Player::where("senha");

        if (!$player && bcrypt($player_senha) != $senha) {
            return redirect()->back()->withInput()->withErrors(["playerNaoExiste" => "Esse player não está cadastrado! Tente novamente."]);
        }

        session([
            "player" => $player,

            "alerta_sucesso" => [
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
            "alerta_confirmar" => [
                "titulo" => "Confirmar Saída",
                "texto" => "Tem certeza que deseja sair?",
                "cancelar" => "cancelarSair",
                "sim" => "sair"
            ]
        ]);

        return redirect()->back();
    }

    public function cancelar() {
        session()->forget("alerta_confirmar");

        return redirect()->back();
    }

    public function sair() {
        session()->forget("alerta_confirmar");        
        session()->forget(["player"]);

        return view("index")
            ->with("imagem", "estrada")
            ->with("pagina", "Home");
    }
}
