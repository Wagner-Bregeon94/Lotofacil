@include('../layout/header')
<link rel="stylesheet" href="{{ asset('css/apostas.css') }}">


<div class="page-header">
    <h2>Minhas Apostas</h2>
</div>
<div class="page-body">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nº</th>
            <th scope="col">Números Sorteados</th>
            <th scope="col">Números Impares</th>
            <th scope="col">Números Pares</th>
            <th scope="col">Números Primos</th>
            <th scope="col">Soma dos Números</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($apostas as $aposta)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $aposta->numeros_sorteados }}</td>
              <td>{{ $aposta->impares }}</td>
              <td>{{ $aposta->pares }}</td>
              <td>{{ $aposta->primos }}</td>
              <td>{{ $aposta->soma }}</td>
            </tr>
          @endforeach  
        </tbody>
    </table>
</div>
@include('../layout/footer')