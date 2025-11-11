<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Personagen;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Cadastrar extends Controller
{
    public function cadastro(): View {

        $personagens = Personagen::all();

        session([
            "alerta_cadastro" => [
                "titulo" => "Cadastro de Player",
                "texto" => "Aqui você criará sua conta e escolherá sua classe preferencial."
            ]
        ]);

        return view("cadastro")
            ->with("imagem", "recrutamento")
            ->with("pagina", "Cadastro")
            ->with("personagens", $personagens);
    }

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

        $player_existente = Player::where("usuario", $usuario)->first();

        if ($player_existente) {
            return redirect()->back()->withInput()->withErrors(["playerExiste" => "Esse player já está cadastrado! Tente novamente."]);
        }

        session([
            "alerta_confirmar_cadastro" => [
                "titulo" => "Confirmação Cadastro!",
                "texto" => "Tem certeza que deseja cadastrar esse player?",
                "dados" => [
                    "usuario" => $usuario,
                    "senha" => $senha,
                    "classe" => $classe
                ]
            ]
        ]);

        return redirect()->back()->withInput();
    }

    public function cancelarCadastrar() {
        session()->forget("alerta_confirmar_cadastro");

        return redirect()->back()->withInput();
    }

    public function cadastroSubmit() {

        $player = new Player();
        $player->usuario = session("alerta_confirmar_cadastro.dados.usuario");
        $player->senha = session("alerta_confirmar_cadastro.dados.senha");
        $player->quantidade_vitorias = 0;
        $player->quantidade_derrotas = 0;
        $player->id_personagem = session("alerta_confirmar_cadastro.dados.classe");
        $player->created_at = date("Y-m-d H:i:s");
        $player->updated_at = null;
        $player->save();

        if (!$player) {
            session()->forget(["alerta_confirmar_cadastro"]);

            return redirect()->back()->withInput()->withErrors(["cadastrar" => "Erro ao tentar cadastrar o player! Tente novamente."]);
        } else {
            session()->forget("alerta_confirmar_cadastro");
            
            session([
                "alerta_cadastro_sucesso" => [
                    "titulo" => "Player Cadastrado com Sucesso!",
                    "texto" => "Agora você pode realizar o login e acessar a página de batalha."
                ]
            ]);

            return view("index")
                ->with("imagem", "estrada")
                ->with("pagina", "Home");
        }
    }
}