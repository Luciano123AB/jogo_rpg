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
        Schema::create('players', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("usuario", 30)->nullable();
            $table->string("senha", 255)->nullable();
            $table->integer("nivel")->nullable();
            $table->integer("quantidade_vitorias");
            $table->integer("quantidade_derrotas");
            $table->integer("id_personagem")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};