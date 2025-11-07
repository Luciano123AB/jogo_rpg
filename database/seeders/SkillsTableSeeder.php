<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("skills")->insert([
            [
                "skill" => "Golpe do Juramento",
                "dano01" => 65,
                "dano02" => 90,
                "dano03" => 120
            ],

            [
                "skill" => "Rasgo do Aço",
                "dano01" => 50,
                "dano02" => 75,
                "dano03" => 100
            ],

            [
                "skill" => "Martelo de Guerra",
                "dano01" => 80,
                "dano02" => 110,
                "dano03" => 150
            ],

            [
                "skill" => "Explosão Arcana",
                "dano01" => 80,
                "dano02" => 130,
                "dano03" => 180
            ],

            [
                "skill" => "Chama Etérea",
                "dano01" => 70,
                "dano02" => 100,
                "dano03" => 140
            ],

            [
                "skill" => "Raio do Vazio",
                "dano01" => 100,
                "dano02" => 160,
                "dano03" => 220
            ],

            [
                "skill" => "Golpe Sombrio",
                "dano01" => 60,
                "dano02" => 85,
                "dano03" => 115
            ],

            [
                "skill" => "Dança das Lâminas",
                "dano01" => 45,
                "dano02" => 80,
                "dano03" => 105
            ],

            [
                "skill" => "Perfuração Silenciosa",
                "dano01" => 90,
                "dano02" => 120,
                "dano03" => 160
            ]
        ]);
    }
}
