@include('layout/header')

<div class="container">
  <div class="row justify-content-md-center">
    <div class="card col-sm m-5">
      <form action="{{ route('auth.authenticate') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Endereço de Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email" name="email">
          <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" name="password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
    </div>
  </div>
</div>

@include('layout/footer')