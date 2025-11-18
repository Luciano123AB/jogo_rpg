<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personagens', function (Blueprint $table) {
            $table->id()->autoIncrement()->comment("1");
            $table->string("classe", 9)->nullable()->comment("Guerreiro|Mago|Assassino");
            $table->string("imagem", 13)->nullable()->comment("guerreiro.png|mago.png|assassino.png");
            $table->string("descricao", 366)->nullable()->comment("...");
            $table->string("tipo_dano", 6)->nullable()->comment("Físico|Mágico");
            $table->string("alcance", 5)->nullable()->comment("Curto|Longo");
            $table->string("vida")->nullable()->comment("Baixa|Alta");
            $table->string("defesa", 5)->nullable()->comment("Baixa|Alta");
            $table->integer("hp")->nullable()->comment("1100|1300|1600");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personagens');
    }
};