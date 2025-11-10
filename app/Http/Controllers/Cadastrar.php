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

    public function cadastroSubmit(Request $request) {
        
        $classe_escolhida = $request->input("classe");
        
        $request->validate(
            [
                "usuario" => "required|max:30",
                "senha" => "required|max:60"
            ],

            [
                "usuario.required" => "O campo usuário é obrigatório.",
                "usuario.max" => "O nome de usuário deve ter no máximo 30 caracteres.",
                "senha.required" => "O campo senha é obrigatório.",
                "senha.max" => "O nome de usuário deve ter no máximo 60 caracteres."
            ]
        );

        $usuario = $request->input("usuario");
        $senha = $request->input("senha");
        $classe = "";

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

        $player_existente = Player::all()
                                  ->where("usuario", $usuario);

        if ($player_existente) {
            return redirect()->back()->withInput()->withErrors(["playerExiste" => "Esse player já está cadastrado! Tente novamente."]);
        }

        $player = new Player();
        $player->usuario = $usuario;
        $player->senha = $senha;
        $player->quantidade_vitorias = 0;
        $player->quantidade_derrotas = 0;
        $player->id_personagem = $classe;
        $player->created_at = date("Y-m-d H:i:s");
        $player->updated_at = null;
        $player->save();

        if (!$player) {
            return redirect()->back()->withInput()->withErrors(["cadastrar" => "Erro ao tentar cadastrar o player! Tente novamente."]);
        } else {

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