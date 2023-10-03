@include('../layout/header')
<div class="page-header">
    <h2>Meu Perfil</h2>
</div>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="card col-sm m-5">
            <form method="POST" action="#">
                @csrf
                {{ Auth::user()->name }}
                {{ Auth::user()->email }}
                <button type="submit">Salvar Alterações</button>
            </form>
        </div>
    </div>
</div>
@include('../layout/footer')