<?php

namespace App\Services;

class Randoms
{
    public static function danoPlayerSorteado($personagem, $nivel, $skill_escolhida) {

        $skill01 = $personagem->skill01->skill;
        $skill02 = $personagem->skill02->skill;
        $skill03 = $personagem->skill03->skill;
        $danos_skill01 = [$personagem->skill01->dano01, $personagem->skill01->dano02, $personagem->skill01->dano03];
        $danos_skill02 = [$personagem->skill02->dano01, $personagem->skill02->dano02, $personagem->skill02->dano03];
        $danos_skill03 = [$personagem->skill03->dano01, $personagem->skill03->dano02, $personagem->skill03->dano03];
        $dano01_sorteado = $danos_skill01[array_rand($danos_skill01)];
        $dano02_sorteado = $danos_skill02[array_rand($danos_skill02)];
        $dano03_sorteado = $danos_skill03[array_rand($danos_skill03)];
        $dano = "";

        switch ($skill_escolhida) {
            case "$skill01":
                $dano = $dano01_sorteado * $nivel;
                session(["skill01" => true]);
            break;

            case "$skill02":
                $dano = $dano02_sorteado * $nivel;
                session(["skill02" => true]);
            break;

            case "$skill03":
                $dano = $dano03_sorteado * $nivel;
                session(["skill03" => true]);
            break;
        }

        return $dano;
    }

    public static function danoOponenteSorteado($personagem, $nivel) {

        $skill01 = $personagem->skill01->skill;
        $skill02 = $personagem->skill02->skill;
        $skill03 = $personagem->skill03->skill;
        $skills = [$skill01, $skill02, $skill03];
        $skill_sorteado = $skills[array_rand($skills)];
        $danos_skill01 = [$personagem->skill01->dano01, $personagem->skill01->dano02, $personagem->skill01->dano03];
        $danos_skill02 = [$personagem->skill02->dano01, $personagem->skill02->dano02, $personagem->skill02->dano03];
        $danos_skill03 = [$personagem->skill03->dano01, $personagem->skill03->dano02, $personagem->skill03->dano03];
        $dano01_sorteado = $danos_skill01[array_rand($danos_skill01)];
        $dano02_sorteado = $danos_skill02[array_rand($danos_skill02)];
        $dano03_sorteado = $danos_skill03[array_rand($danos_skill03)];
        $dano = "";

        switch ($skill_sorteado) {
            case "$skill01":
                $dano = $dano01_sorteado * $nivel;
            break;

            case "$skill02":
                $dano = $dano02_sorteado * $nivel;
            break;

            case "$skill03":
                $dano = $dano03_sorteado * $nivel;
            break;
        }

        return $dano;
    }
}
