<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatosController extends Controller
{
    public function index() {
       /*  var_dump($_GET); */
       
        var_dump($_POST);
        $titulo = 'contato';
        return view('pages/contato', [
            'titulo' => $titulo
        ]);
    }
}
