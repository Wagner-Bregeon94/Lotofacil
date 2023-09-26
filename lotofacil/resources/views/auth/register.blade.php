@include('..layout/header')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

<div class="page-header">
  <h2>Fazer cadastro</h2>
</div>

<div class="container">
  <div class="row justify-content-md-center">
    <div class="card col-sm m-5">
      <form action="{{ route('auth.register') }}" method="POST">
        @csrf
        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif
        <div class="form-group">
          <label for="exampleInputNome">Nome completo</label>
          <input type="text" class="form-control" id="exampleInputNome" placeholder="Digite seu nome" name="name">
        </div>
        <div class="form-group">
          <label for="exampleInputDataNascimento">Data de Nascimento</label>
          <input type="date" class="form-control" id="exampleInputDataNascimento" name="data_nascimento">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Endereço de Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu Email" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputSenha">Senha</label>
          <input type="password" class="form-control" id="exampleInputSenha" placeholder="Digite sua Senha" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
  </div>
</div>
@include('..layout/footer')