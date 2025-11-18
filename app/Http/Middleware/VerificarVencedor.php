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

            $id_batalha = session("dados.id_batalha");
            $batalha = Batalha::find($id_batalha);
            
            if ($batalha->hp <= 0) {
                session()->forget(["alerta_confirmar_render", "dados", "skill01", "skill02", "skill03"]);
    
                $id = session("player.id");
                
                $player = Player::find($id);
                $player->quantidade_derrotas = $player->quantidade_derrotas + 1;
                $player->save();

                $batalha->ganhou = "Oponente";
                $batalha->updated_at = date("Y-m-d H:i:s");
                $batalha->save();
                
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
                $xp = 33.5;
                
                $player = Player::find($id);
                $player->xp = $player->xp + $xp;
                if ($player->xp >= 100) {
                    $player->nivel++;
                    $player->xp = 0;
                    $rota = "home";
                }
                $player->quantidade_vitorias = $player->quantidade_vitorias + 1;
                $player->save();

                $batalha->ganhou = "Player";
                $batalha->updated_at = date("Y-m-d H:i:s");
                $batalha->save();
                
                session([
                    "xp" => $player->xp,
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
