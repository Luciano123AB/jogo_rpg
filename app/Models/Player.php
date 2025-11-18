<?php

namespace App\Models;

use App\Models\Personagen;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        "usuario",
        "senha",
        "genero",
        "nivel",
        "subir_nivel",
        "quantidade_vitorias",
        "quantidade_derrotas"
    ];
    
    public function personagens() {
        return $this->hasMany(Personagen::class);
    }

    public function personagem() {
        return $this->belongsTo(Personagen::class, "id_personagem");
    }
}