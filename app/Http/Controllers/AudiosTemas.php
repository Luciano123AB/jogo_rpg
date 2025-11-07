<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudiosTemas extends Controller
{
    public function tocarMusica() {
        if (!session()->has("musica")) {
            session(["musica" => "Desativado"]);

            return redirect()->back();
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
    }

    public function mudarTema() {
        if (!session()->has("tema")) {
            session(["tema" => "claro"]);

            return redirect()->back();
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
    }
}
