@section('css')

@stop

@include('../layout/header')
<link rel="stylesheet" href="{{ asset('css/sorteador.css') }}">

<div>
  <div class="page-header">
    <h2>Sorteador de Números</h2>
  </div>
  <div class="select-options">
    <label for="selectSorteio">Sortear meu jogo com:</label>
    <select id="selectSorteio">
      <option value="15">15 números</option>
      <option value="16">16 números</option>
      <option value="17">17 números</option>
      <option value="18">18 números</option>
      <option value="19">19 números</option>
      <option value="20">20 números</option>
    </select>
    <button  class="button-save" id="saveButton">Salvar Aposta</button>
  </div>
  <div id="sorteador"></div>
  <div class="div-sorteador">
    <button class="button-sorteador" id="updateButton">Atualizar Números</button>
  </div>
</div>
<div id="oddNumbers"></div>
<div id="evenNumbers"></div>

<script src="{{ asset('js/sorteador.js') }}"></script>
@include('../layout/footer')

  

