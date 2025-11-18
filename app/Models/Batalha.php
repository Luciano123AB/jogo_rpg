<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batalha extends Model
{
    protected $fillable = [
        "hp",
        "hp_oponente",
        "vez"
    ];
}