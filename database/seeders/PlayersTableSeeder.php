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
                "senha" => bcrypt("24032004ABCD123"),
                "quantidade_vitorias" => 0,
                "quantidade_derrotas" => 0,
                "id_personagem" => 2,
                "created_at" => date("Y-m-d H:m:s")
            ]
        ]);
    }
}
