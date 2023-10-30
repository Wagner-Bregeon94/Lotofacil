@include('..layout/header')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">

<div class="page-header">
  <h2>Fazer cadastro</h2>
</div>

<div class="container">
  <div class="row justify-content-md-center">
    <div class="card col-sm m-5">
      <form action="{{ route('auth.register') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputNome">Nome</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputNome" placeholder="Digite seu nome" name="name" value="{{ old('name') }}">
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputSobrenome">Sobrenome</label>
          <input type="text" class="form-control @error('surname') is-invalid @enderror" id="exampleInputSobrenome" placeholder="Digite seu sobrenome" name="surname" value="{{ old('surname') }}">
          @error('surname')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputDataNascimento">Data de nascimento</label>
          <input type="date" class="form-control @error('data_nascimento') is-invalid @enderror" id="exampleInputDataNascimento" name="data_nascimento" value="{{ old('data_nascimento') }}">
          @error('data_nascimento')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Endereço de email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email" name="email" value="{{ old('email') }}">
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputSenha">Senha</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputSenha" placeholder="Digite sua senha" name="password" value="{{ old('password') }}">
          @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputConfirmSenha">Confirme a senha</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputConfirmSenha" placeholder="Confirme sua senha" name="password_confirmation" value="{{ old('password') }}">
          @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <hr>
        <div class="user-actions">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@include('..layout/footer')