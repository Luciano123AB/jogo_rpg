<?php

namespace App\Services;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class Boot
{
    public static function dependencias() {
        shell_exec("npm install 2>&1");
    }
}
