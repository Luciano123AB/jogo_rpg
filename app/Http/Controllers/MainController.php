<?php

namespace App\Http\Controllers;

use App\Services\Boot;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        if (!is_dir(base_path("node_modules"))) {
            Boot::dependencias();
        }
        
        return view("index")->with("imagem", "index.png");
    }
}