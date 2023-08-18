<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index() {

        $titulo = 'home';

        return view('pages/principal', [
            'titulo' => $titulo
        ]);
    }

    public function teste(int $p1, int $p2 ) {

        $soma = $p1 + $p2;
        echo 'o resultado dos dois paramentros : ' . $soma;
        
        $titulo = 'home';

        return view('pages/principal', [
            'titulo' => $titulo
        ]); 
    }
}
