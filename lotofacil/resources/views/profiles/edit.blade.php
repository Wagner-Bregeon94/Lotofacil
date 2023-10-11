@include('../layout/header')
<link rel="stylesheet" href="{{ asset('css/profile/edit.css') }}">

<div class="page-header">
    <h2>Editar Conta</h2>
</div>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="card col-sm m-5">
            <form action="">
                @csrf
                <div class="form-group">
                    <label for="">Nome:</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label for="">Sobrenome:</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->surname }}">
                </div>
                <div class="form-group">
                    <label for="">Data de Nascimento:</label>
                    <input type="date" class="form-control" name="" id="" value="{{ Auth::user()->data_aniversario }}">
                </div>
                <div class="form-group">
                    <label for="">Endereço de Email:</label>
                    <input type="email" class="form-control" name="" id="" value="{{ Auth::user()->email }}">
                </div>
                <button type="submit">Salvar Alterações</button>
            </form>
        </div>
    </div>
</div>

@include('../layout/footer')