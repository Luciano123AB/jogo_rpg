<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personagen extends Model
{
    protected $fillable = [
        "classe",
        "imagem",
        "descricao",
        "tipo_dano",
        "alcance",
        "vida",
        "defesa",
        "hp"
    ];

    public function skills() {
        return $this->hasMany(Skill::class);
    }

    public function player() {
        return $this->belongsTo(Personagen::class);
    }

    public function skill01() {
        return $this->belongsTo(Skill::class, "id_skill01");
    }

    public function skill02() {
        return $this->belongsTo(Skill::class, "id_skill02");
    }

    public function skill03() {
        return $this->belongsTo(Skill::class, "id_skill03");
    }
}