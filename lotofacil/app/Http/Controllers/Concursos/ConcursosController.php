<?php 

namespace App\Http\Controllers\Concursos;

use App\Http\Controllers\Controller;

class ConcursosController extends Controller{
    public function concursos() {
        return view('concursos.concursos');
    }
}