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
        Schema::create("usuarios", function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("nome_completo", 80)->nullable()->comment("...");
            $table->date("data_nascimento", 10)->nullable()->comment("00/00/0000");
            $table->longText("foto", 13980320)->comment("...");
            $table->integer("permissao")->default(1)->comment("1 = Administrador | 0 = Usuário Comum");
            $table->dateTime("ultimo_acesso")->nullable()->comment("00/00/0000 00:00:00");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("usuarios");
    }
};