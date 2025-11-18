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
                "nivel" => 1,
                "xp" => 0,
                "quantidade_vitorias" => 0,
                "quantidade_derrotas" => 0,
                "id_personagem" => 2,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Carlos123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 1,
                "xp" => 33.5,
                "quantidade_vitorias" => 1,
                "quantidade_derrotas" => 2,
                "id_personagem" => 1,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Mariana123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Feminino",
                "nivel" => 1,
                "xp" => 67.0,
                "quantidade_vitorias" => 2,
                "quantidade_derrotas" => 1,
                "id_personagem" => 2,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Rafael123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 2,
                "xp" => 0,
                "quantidade_vitorias" => 3,
                "quantidade_derrotas" => 4,
                "id_personagem" => 3,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Beatriz123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Feminino",
                "nivel" => 2,
                "xp" => 33.5,
                "quantidade_vitorias" => 4,
                "quantidade_derrotas" => 0,
                "id_personagem" => 1,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Fernando123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 2,
                "xp" => 67.0,
                "quantidade_vitorias" => 5,
                "quantidade_derrotas" => 3,
                "id_personagem" => 2,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Aline123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Feminino",
                "nivel" => 3,
                "xp" => 0,
                "quantidade_vitorias" => 6,
                "quantidade_derrotas" => 6,
                "id_personagem" => 3,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Eduardo123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 3,
                "xp" => 33.5,
                "quantidade_vitorias" => 7,
                "quantidade_derrotas" => 2,
                "id_personagem" => 1,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Patricia123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Feminino",
                "nivel" => 3,
                "xp" => 67.0,
                "quantidade_vitorias" => 8,
                "quantidade_derrotas" => 1,
                "id_personagem" => 2,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Gustavo123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 4,
                "xp" => 0,
                "quantidade_vitorias" => 9,
                "quantidade_derrotas" => 5,
                "id_personagem" => 3,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Claudia123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Feminino",
                "nivel" => 4,
                "xp" => 33.5,
                "quantidade_vitorias" => 10,
                "quantidade_derrotas" => 0,
                "id_personagem" => 1,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Henrique123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 4,
                "xp" => 67.0,
                "quantidade_vitorias" => 11,
                "quantidade_derrotas" => 7,
                "id_personagem" => 2,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Isabela123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Feminino",
                "nivel" => 5,
                "xp" => 0,
                "quantidade_vitorias" => 12,
                "quantidade_derrotas" => 3,
                "id_personagem" => 3,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Marcelo123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 5,
                "xp" => 33.5,
                "quantidade_vitorias" => 13,
                "quantidade_derrotas" => 4,
                "id_personagem" => 1,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Juliana123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Feminino",
                "nivel" => 5,
                "xp" => 67.0,
                "quantidade_vitorias" => 14,
                "quantidade_derrotas" => 2,
                "id_personagem" => 2,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Thiago123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 6,
                "xp" => 0,
                "quantidade_vitorias" => 15,
                "quantidade_derrotas" => 8,
                "id_personagem" => 3,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Camila123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Feminino",
                "nivel" => 6,
                "xp" => 33.5,
                "quantidade_vitorias" => 16,
                "quantidade_derrotas" => 5,
                "id_personagem" => 1,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Leonardo123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 6,
                "xp" => 67.0,
                "quantidade_vitorias" => 17,
                "quantidade_derrotas" => 10,
                "id_personagem" => 2,
                "created_at" => date("Y-m-d H:i:s")
            ],

            [
                "usuario" => "Sara123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Feminino",
                "nivel" => 7,
                "xp" => 0,
                "quantidade_vitorias" => 18,
                "quantidade_derrotas" => 1,
                "id_personagem" => 3,
                "created_at" => date("Y-m-d H:i:s")
            ],
            
            [
                "usuario" => "Victor123AB",
                "senha" => encrypt("24032004ABCD123"),
                "genero" => "Masculino",
                "nivel" => 7,
                "xp" => 33.5,
                "quantidade_vitorias" => 19,
                "quantidade_derrotas" => 6,
                "id_personagem" => 1,
                "created_at" => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
