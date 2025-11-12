<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class Cadastrar extends Controller
{
    public function confirmarCadastrar(Request $request) {
        
        $classe_escolhida = $request->input("classe");
        
        $request->validate(
            [
                "novo_usuario" => "required|max:30",
                "nova_senha" => "required|max:60",
                "confirmar_nova_senha" => "required"
            ],

            [
                "novo_usuario.required" => "O campo usuário é obrigatório.",
                "novo_usuario.max" => "O nome de usuário deve ter no máximo 30 caracteres.",
                "nova_senha.required" => "O campo senha é obrigatório.",
                "nova_senha.max" => "O nome de usuário deve ter no máximo 60 caracteres.",
                "confirmar_nova_senha.required" => "Confirme sua senha."
            ]
        );

        $usuario = $request->input("novo_usuario");
        $senha = $request->input("nova_senha");
        $confirmar_senha = $request->input("confirmar_nova_senha");
        $classe = "";

        if ($senha != $confirmar_senha) {
            return redirect()->back()->withInput()->withErrors(["senhas" => "As senhas estão diferentes! Tente novamente."]);
        }

        switch ($classe_escolhida) {
            case "Guerreiro":
                $classe = 1;
            break;

            case "Mago":
                $classe = 2;
            break;

            case "Assassino":
                $classe = 3;
            break;
            
            default:
                $classe = "Selecione sua classe...";
            break;
        }

        if ($classe == "Selecione sua classe...") {
            return redirect()->back()->withInput()->withErrors(["classe" => "Você deve escolher uma classe primeiro."]);
        }

        $player_existente = Player::where("usuario", $usuario)
                                  ->first();

        if ($player_existente) {
            return redirect()->back()->withInput()->withErrors(["playerExiste" => "Esse player já está cadastrado! Tente novamente."]);
        }

        session([
            "alerta_confirmar" => [
                "titulo" => "Confirmação Cadastro!",
                "texto" => "Tem certeza que deseja cadastrar esse player?",
                "cancelar" => "cancelarCadastrar",
                "sim" => "cadastrar",
                "dados" => [
                    "usuario" => $usuario,
                    "senha" => $senha,
                    "classe" => $classe
                ]
            ]
        ]);

        return redirect()->back()->withInput();
    }

    public function cancelar() {
        session()->forget("alerta_confirmar");

        return redirect()->back()->withInput();
    }

    public function cadastroSubmit() {

        $player = new Player();
        $player->usuario = session("alerta_confirmar.dados.usuario");
        $player->senha = bcrypt(session("alerta_confirmar.dados.senha"));
        $player->nivel = 1;
        $player->quantidade_vitorias = 0;
        $player->quantidade_derrotas = 0;
        $player->id_personagem = session("alerta_confirmar.dados.classe");
        $player->created_at = date("Y-m-d H:i:s");
        $player->updated_at = null;
        $player->save();

        if (!$player) {
            session()->forget(["alerta_confirmar"]);

            session([
                "alerta_erro" => [
                    "titulo" => "Erro ao Cadastrar!",
                    "texto" => "Ocorreu um erro ao tentar cadastrar esse player! Tente novamente."
                ]
            ]);

            return redirect()->back()->withInput();
        } else {
            session()->forget("alerta_confirmar");
            
            session([
                "alerta_sucesso" => [
                    "titulo" => "Player Cadastrado com Sucesso!",
                    "texto" => "Agora você pode realizar o login e acessar a página de batalha."
                ]
            ]);

            return redirect()->route("home");
        }
    }
}