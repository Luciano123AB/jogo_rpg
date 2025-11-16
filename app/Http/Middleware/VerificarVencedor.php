<?php

namespace App\Http\Middleware;

use App\Models\Batalha;
use App\Models\Player;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificarVencedor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has("dados.batalha_comecou")) {

            $batalha = Batalha::find(1);
            
            if ($batalha->hp <= 0) {
                session()->forget(["alerta_confirmar_render", "dados", "skill01", "skill02", "skill03"]);
    
                $id = session("player.id");
                
                $player = Player::find($id);
                $player->quantidade_derrotas = $player->quantidade_derrotas + 1;
                $player->save();
    
                Batalha::truncate();
                
                session([
                    "alerta_erro" => [
                        "titulo" => "Derrota!",
                        "texto" => "Não desista, faz parte continue tentando, não dá para ganhar todas."
                    ]
                ]);
    
                return redirect()->route("preparacao");
            }
            
            if ($batalha->hp_oponente <= 0) {
                session()->forget(["alerta_confirmar_render", "dados", "skill01", "skill02", "skill03"]);
    
                $id = session("player.id");
                $rota = "preparacao";
                
                $player = Player::find($id);
                if ($player->subir_nivel == "Sim") {
                    $player->nivel++;
                    $player->subir_nivel = "Não";
                    $rota = "home";
                } else {
                    $player->subir_nivel = "Sim";
                }
                $player->quantidade_vitorias = $player->quantidade_vitorias + 1;
                $player->save();
    
                Batalha::truncate();
                
                session([
                    "alerta_vitoria" => [
                        "titulo" => "Vitória!",
                        "texto" => "Parabéns!, continue assim e você se destacará na classificação.",
                        "rota" => $rota
                    ]
                ]);
    
                return redirect()->route("preparacao");
            }
        }

        return $next($request);
    }
}
