@include('../layout/header')
<link rel="stylesheet" href="{{ asset('css/profile/show.css') }}">

<div class="page-header">
    <h2>Minha Conta</h2>
</div>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="card col-sm m-5">
            <div class="form-control"><strong>Nome:</strong> {{ Auth::user()->name }}</div>
            <div class="form-control"><strong>Sobrenome:</strong> {{ Auth::user()->surname }}</div>
            <div class="form-control"><strong>Data de Nascimento:</strong> {{ Auth::user()->data_nascimento }}</div>
            <div class="form-control"><strong>Endereço de Email:</strong> {{ Auth::user()->email }}</div>
            <hr>
            <div class="teste">
                <a href="{{ route('show.edit') }}">Editar Conta</a>
                <a href="#">Alterar Senha</a>
                <a href="#">Excluir Conta</a>
            </div>
        </div>
    </div>
</div>
@include('../layout/footer')