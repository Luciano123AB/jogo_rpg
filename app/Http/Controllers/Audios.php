<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Audios extends Controller
{
    public function musicaNormal() {
    if (!session()->has("musicaNormal")) {
        session(["musicaNormal" => "Desativado"]);

        return redirect()->back();
    } else {
        if (session("musicaNormal") == "Ativado") {
            session(["musicaNormal" => "Desativado"]);

            return redirect()->back();
        }

        if (session("musicaNormal") == "Desativado") {
            session(["musicaNormal" => "Ativado"]);
            
            return redirect()->back();
        }
    }
}
}
