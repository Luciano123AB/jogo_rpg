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
            $table->id()->autoIncrement();
            $table->string("classe", 9)->nullable();
            $table->string("imagem", 13)->nullable();
            $table->string("descricao", 366)->nullable();
            $table->string("tipo_dano", 6)->nullable();
            $table->string("alcance", 5)->nullable();
            $table->string("vida")->nullable();
            $table->string("defesa", 5)->nullable();
            $table->integer("hp")->nullable();
            $table->integer("id_skill01")->nullable();
            $table->integer("id_skill02")->nullable();
            $table->integer("id_skill03")->nullable();
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