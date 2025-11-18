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
        Schema::create('skills', function (Blueprint $table) {
            $table->id()->autoIncrement()->comment("1");
            $table->string("skill", 21)->nullable()->comment("...");
            $table->integer("dano01")->nullable()->comment("100");
            $table->integer("dano02")->nullable()->comment("140");
            $table->integer("dano03")->nullable()->comment("220");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};