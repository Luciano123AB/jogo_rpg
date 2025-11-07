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
            $table->integer("vida")->nullable();
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
