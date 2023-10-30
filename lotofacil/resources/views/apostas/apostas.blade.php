@include('../layout/header')

<link rel="stylesheet" href="{{ asset('css/apostas.css') }}">

<div class="page-header">
    <h2>Minhas Apostas</h2>
</div>
<div class="page-body">
  <form action="{{ route('apostas.delete') }}" method="POST" id="delete-form">
    @csrf
    @method('DELETE')

    <table class="table">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Nº</th>
          <th scope="col">Números Sorteados</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Impares</th>
          <th scope="col">Pares</th>
          <th scope="col">Primos</th>
          <th scope="col">Soma</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($apostas as $aposta)
          <tr>
            <td> <input type="checkbox" name="selectedApostas[]" value="{{ $aposta->id }}"></td>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $aposta->numeros_sorteados }}</td>
            <td>{{ $aposta->quantidade }}</td>
            <td>{{ $aposta->impares }}</td>
            <td>{{ $aposta->pares }}</td>
            <td>{{ $aposta->primos }}</td>
            <td>{{ $aposta->soma }}</td>
          </tr>
        @endforeach  
      </tbody>
    </table>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmationModal"><i class="fas fa-trash"></i> Excluir Selecionados</button>
    
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Modal de confirmação -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="confirmationModalLabel">Confirmação de Exclusão</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              </button>
          </div>
          <div class="modal-body">
            Tem certeza de que deseja excluir as apostas selecionadas?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">Confirmar Exclusão</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<script src="{{ asset('js/apostas.js') }}"></script>
@include('../layout/footer')