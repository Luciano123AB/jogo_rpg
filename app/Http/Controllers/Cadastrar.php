<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Services\GenerosClasses;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Cadastrar extends Controller
{
    public function confirmarCadastrar(Request $request): RedirectResponse {
        
        $genero_escolhida = $request->input("genero");
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

        if ($senha != $confirmar_senha) {
            return redirect()->back()->withInput()->withErrors(["senhas" => "As senhas estão diferentes! Tente novamente."]);
        }

        $genero = GenerosClasses::escolhaGenero($genero_escolhida);

        if ($genero == "Selecione seu gênero...") {
            return redirect()->back()->withInput()->withErrors(["genero" => "Selecione seu gênero também."]);
        }

        $classe = GenerosClasses::escolhaClasse($classe_escolhida);

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
                    "genero" => $genero,
                    "classe" => $classe
                ]
            ]
        ]);

        return redirect()->back()->withInput();
    }

    public function cancelar(): RedirectResponse {
        session()->forget("alerta_confirmar");

        return redirect()->back()->withInput();
    }

    public function cadastroSubmit(): RedirectResponse {

        $player = new Player();
        $player->usuario = session("alerta_confirmar.dados.usuario");
        $player->senha = encrypt(session("alerta_confirmar.dados.senha"));
        $player->genero = session("alerta_confirmar.dados.genero");
        $player->nivel = 1;
        $player->subir_nivel = "Sim";
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