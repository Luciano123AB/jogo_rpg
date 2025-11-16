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
        Schema::create('batalhas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer("hp")->nullable();
            $table->integer("hp_oponente")->nullable();
            $table->integer("vez")->nullable();
            $table->string("ganhou")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batalhas');
    }
};
