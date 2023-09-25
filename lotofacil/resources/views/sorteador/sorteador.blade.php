@include('../layout/header')
<link rel="stylesheet" href="{{ asset('css/sorteador.css') }}">

<div class="page-header">
  <h2>Sorteador de Números</h2>
</div>

<div class="page-body">
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
  </div>
  <div class="side-by-side">
    <div class="table-sorteador" id="sorteador"></div>
    <div class="table-results">
      <table>
        <tr class="title">
            <th id="showDraw"></th>
        </tr>
        <tr>
            <td class="drawnNumbers" id="drawnNumbers"></td>
        </tr>
      </table>

      <table>
        <tr class="title">
            <th>Soma dos Números:</th>
        </tr>
        <tr>
            <td id="sumOfNumbers"></td>
        </tr>
      </table>

      <table>
        <tr class="title">
          <th>Números Ímpares:</th>
        </tr>
        <tr>
          <td id="oddNumbers"></td>
        </tr>
      </table>

      <table>
        <tr class="title">
          <th>Números Pares:</th>
        </tr>
        <tr>
          <td id="evenNumbers"></td>
        </tr>
      </table>

      <table>
        <tr class="title">
          <th>Números Primos:</th>
        </tr>
        <tr>
          <td id="primeNumbers"></td>
        </tr>
      </table>
    </div>
  </div>
  <div class="buttons">
    <button class="button-sorteador" id="updateButton">Atualizar Números</button>
    <form id="apostaForm" action="{{ route('apostas.salvar') }}" method="POST">
      @csrf
      <input type="hidden" id="numerosSorteadosInput" name="numeros_sorteados" value="">
      <input type="hidden" id="somaInput" name="soma" value="">
      <input type="hidden" id="imparesInput" name="impares" value="">
      <input type="hidden" id="paresInput" name="pares" value="">
      <input type="hidden" id="primosInput" name="primos" value="">
      <button type="submit" id="saveButton" class="button-save">Salvar Aposta</button>
    </form>
  </div>
</div>
<script src="{{ asset('js/sorteador.js') }}"></script>
@include('../layout/footer')

  

