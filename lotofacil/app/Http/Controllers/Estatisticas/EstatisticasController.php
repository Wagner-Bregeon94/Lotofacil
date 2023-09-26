<?php

namespace App\Http\Controllers\Estatisticas;

use App\Http\Controllers\Controller;

class EstatisticasController extends Controller {

    public function estatisticas() 
    {
        return view('estatisticas.estatisticas');
    }
}