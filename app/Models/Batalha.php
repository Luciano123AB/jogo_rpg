<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Batalha extends Model
{
    protected $fillable = [
        "hp",
        "hp_oponente",
        "vez"
    ];

    use SoftDeletes;
}