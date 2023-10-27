@include('../layout/header')
<link rel="stylesheet" href="{{ asset('css/profile/changePassword.css') }}">

<div class="page-header">
    <h2>Alterar Senha</h2>
</div>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="card col-sm m-5">
            <form action="{{ route('change.password.submit') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="current_password">Senha Atual:</label>
                    <input type="password" placeholder="Digite sua senha atual" class="form-control" name="current_password" id="current_password">
                </div>

                <div class="form-group">
                    <label for="password">Nova Senha:</label>
                    <input type="password" placeholder="Digite sua nova senha" class="form-control" name="password" id="password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirmar Nova Senha:</label>
                    <input type="password" placeholder="Confirme sua nova senha" class="form-control" name="password_confirmation" id="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Alterar Senha</button>
            </form>
        </div>
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>

@include('../layout/footer')