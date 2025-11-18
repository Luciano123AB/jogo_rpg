<?php

namespace App\Services;

class GenerosClasses
{
    public static function escolhaGenero($genero_escolhida) {

        $genero = "";

        switch ($genero_escolhida) {
            case "Masculino":
                $genero = "Masculino";
            break;

            case "Feminino":
                $genero = "Feminino";
            break;

            case "Outro":
                $genero = "Outro";
            break;
            
            default:
                $genero = "Selecione seu gênero...";
            break;
        }

        return $genero;
    }

    public static function escolhaClasse($classe_escolhida) {

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

        return $classe;
    }
}
