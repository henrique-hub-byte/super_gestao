<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function index() {
        
        $titulo = 'Sobre nós';
        
        return view('pages/sobre-nos',[
            'titulo' => $titulo
        ]);
    }
}
