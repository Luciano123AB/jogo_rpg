<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("personagens")->insert([
            [
                "classe" => "guerreiro",
                "imagem" => "guerreiro.png",
                "vida" => 1600,
                "id_skill01" => 1,
                "id_skill02" => 2,
                "id_skill03" => 3
            ],

            [
                "classe" => "mago",
                "imagem" => "mago.png",
                "vida" => 1100,
                "id_skill01" => 4,
                "id_skill02" => 5,
                "id_skill03" => 6
            ],

            [
                "classe" => "assassino",
                "imagem" => "assassino.png",
                "vida" => 1300,
                "id_skill01" => 7,
                "id_skill02" => 8,
                "id_skill03" => 9
            ]
        ]);
    }
}
