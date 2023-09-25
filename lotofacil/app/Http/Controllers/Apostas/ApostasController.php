<?php

namespace  App\Http\Controllers\Apostas;

use Illuminate\Http\Request;
use App\Models\ApostasModel;
use Illuminate\Support\Facades\Auth;

class ApostasController{

    public function salvarAposta(Request $request) {
        // Obtenha os dados da aposta do formulário
        $numerosSorteados = $request->input('numeros_sorteados');
        $soma = $request->input('soma');
        $impares = $request->input('impares');
        $pares = $request->input('pares');
        $primos = $request->input('primos');
        $numerosSorteados = str_replace('[', '', $numerosSorteados);
        $numerosSorteados = str_replace(']', '', $numerosSorteados);
        $numerosSorteados = str_replace(',', ' - ', $numerosSorteados);
        // Crie uma nova instância do modelo de apostas e atribua os valores
        $aposta = new ApostasModel();
        $aposta->numeros_sorteados = $numerosSorteados;
        $aposta->soma = $soma;
        $aposta->impares = $impares;
        $aposta->pares = $pares;
        $aposta->primos = $primos;
        $aposta->user_id = Auth::user()->id;
        // Salve a aposta no banco de dados
        $aposta->save();

        // Redirecione de volta para a página de apostas
        return redirect()->route('apostas.apostas');
    }

    public function apostas(Request $request) {
        $apostas = ApostasModel::all(); 
        
        $numerosSorteados = $request->input('numeros_sorteados');
        $soma = $request->input('soma');
        $impares = $request->input('impares');
        $pares = $request->input('pares');
        $primos = $request->input('primos');
        
        return view('apostas.apostas', [
            'apostas' => $apostas,
            'numeros_sorteados' => $numerosSorteados,
            'soma' => $soma,
            'impares' => $impares,
            'pares' => $pares,
            'primos' => $primos,
        ]);
    }
}