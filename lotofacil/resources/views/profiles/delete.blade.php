@include('../layout/header')
<link rel="stylesheet" href="{{ asset('css/profile/delete.css') }}">

<div class="page-header">
    <h2>Excluir Conta</h2>
</div>

<div class="alert alert-danger" role="alert">
    <strong>Atenção!</strong> Ao confirmar sua senha e clicar em <strong>Excluir Conta</strong>, todos os seus dados e apostas serão excluídos permanentemente. Essa ação é irreversível e não será possível recuperar seus dados posteriormente.
</div>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="card col-sm m-5">
            <form action="{{ route('profile.delete', ['id' => $user->id]) }}" method="POST">
                @csrf
                @method('DELETE')

                <div class="form-group">
                    <label for="current_password">Senha:</label>
                    <input type="password" placeholder="Digite sua senha" class="form-control" name="current_password" id="current_password">
                </div>

                <div class="form-group">
                    <label for="password">Confirmar Senha:</label>
                    <input type="password" placeholder="Confirme sua senha" class="form-control" name="password" id="password">
                </div>
                <hr>
                <div class="user-actions">
                    <a href="{{ route('profile.show') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left fa-1x"></i> Voltar
                    </a>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Excluir conta</button>
                </div>
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

        @if ($errors->has('password'))
            <div class="alert alert-danger">
                {{ $errors->first('password') }}
            </div>
        @endif
        
    </div>
</div>

@include('../layout/footer')