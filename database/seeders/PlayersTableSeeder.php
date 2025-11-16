<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("players")->insert([
            [
                "usuario" => "Luciano123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 4,
                "subir_nivel" => "Não",
                "quantidade_vitorias" => 8,
                "quantidade_derrotas" => 0,
                "id_personagem" => 2,
                "created_at" => date("Y-m-d H:m:s")
            ],

            [
                "usuario" => "Daniela123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Feminino",
                "nivel" => 3,
                "subir_nivel" => "Não",
                "quantidade_vitorias" => 6,
                "quantidade_derrotas" => 2,
                "id_personagem" => 3,
                "created_at" => date("Y-m-d H:m:s")
            ],

            [
                "usuario" => "Eduardo123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 2,
                "subir_nivel" => "Não",
                "quantidade_vitorias" => 4,
                "quantidade_derrotas" => 1,
                "id_personagem" => 1,
                "created_at" => date("Y-m-d H:m:s")
            ],

            [
                "usuario" => "Maria123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Feminino",
                "nivel" => 1,
                "subir_nivel" => "Sim",
                "quantidade_vitorias" => 1,
                "quantidade_derrotas" => 2,
                "id_personagem" => 3,
                "created_at" => date("Y-m-d H:m:s")
            ],

            [
                "usuario" => "Gustavo123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 1,
                "subir_nivel" => "Sim",
                "quantidade_vitorias" => 0,
                "quantidade_derrotas" => 0,
                "id_personagem" => 2,
                "created_at" => date("Y-m-d H:m:s")
            ]
        ]);
    }
}
