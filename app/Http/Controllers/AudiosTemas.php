<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class AudiosTemas extends Controller
{
    public function tocarMusica(): RedirectResponse {
        if (!session()->has("musica")) {
            session(["musica" => "Desativado"]);            
        } else {
            if (session("musica") == "Ativado") {
                session(["musica" => "Desativado"]);

                return redirect()->back();
            }

            if (session("musica") == "Desativado") {
                session(["musica" => "Ativado"]);
                
                return redirect()->back();
            }
        }

        return redirect()->back();
    }

    public function mudarTema(): RedirectResponse {
        if (!session()->has("tema")) {
            session(["tema" => "escuro"]);            
        } else {
            if (session("tema") == "claro") {
                session(["tema" => "escuro"]);

                return redirect()->back();
            }

            if (session("tema") == "escuro") {
                session(["tema" => "claro"]);

                return redirect()->back();
            }
        }

        return redirect()->back();
    }
}
