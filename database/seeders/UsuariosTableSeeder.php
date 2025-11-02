<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("usuarios")->insert([
            [
                "nome_completo" => "Usuário 01",
                "data_nascimento" => "00/00/0000",
                "foto" => "iVBORw0KGg...",
                "permissao" => 1,
                "ultimo_acesso" => "00/00/0000 00:00:00"
            ]
        ]);
    }
}