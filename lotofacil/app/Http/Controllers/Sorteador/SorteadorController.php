<?php

namespace App\Http\Controllers\Sorteador;

use App\Http\Controllers\Controller;

class SorteadorController extends Controller {

    public function sorteador() 
    {
        return view('sorteador.sorteador');
    }
}
