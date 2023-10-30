@include('../layout/header')
<link rel="stylesheet" href="{{ asset('css/profile/show.css') }}">

<div class="page-header">
    <h2>Minha Conta</h2>
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

<div class="container">
    <div class="row justify-content-md-center">
        <div class="card col-sm m-5">
            <div class="form-control"><strong>Nome:</strong> {{ Auth::user()->name }}</div>
            <div class="form-control"><strong>Sobrenome:</strong> {{ Auth::user()->surname }}</div>
            <div class="form-control"><strong>Data de Nascimento:</strong> {{ Auth::user()->data_nascimento }}</div>
            <div class="form-control"><strong>Endereço de Email:</strong> {{ Auth::user()->email }}</div>
            <hr>
            <div class="user-actions">
                <a class="btn btn btn-info" href="{{ route('profile.edit') }}"><i class="fas fa-pencil-alt"> Editar Conta</i></a>
                <a class="btn btn-warning" href="{{ route('change.password') }}"><i class="fas fa-lock"> Alterar Senha</i></a>
                <a class="btn btn-danger" href="{{ route('delete.account') }}"><i class="fas fa-trash"> Excluir Conta</i></a>
            </div>
        </div>
    </div>
</div>

@include('../layout/footer')