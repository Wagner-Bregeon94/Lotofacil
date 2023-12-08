@include('../layout/header')
<link rel="stylesheet" href="{{ asset('css/profile/edit.css') }}">

<div class="page-header">
    <h2>Editar Conta</h2>
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
            <form action="{{ route('profile.edit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Nome:</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label for="">Sobrenome:</label>
                    <input type="text" class="form-control" name="surname" id="surname" value="{{ Auth::user()->surname }}">
                </div>
                <div class="form-group">
                    <label for="">Data de Nascimento:</label>
                    <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" value="{{ Auth::user()->data_nascimento }}">
                </div>
                <div class="form-group">
                    <label for="">Endereço de Email:</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
                </div>
                <hr>
                <div class="user-actions">
                    <a href="{{ route('profile.show') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left fa-1x"></i> Voltar
                    </a> 
                    <button type="button" class="btn btn-primary edit-button" id="openEditModalButton" onclick="exibirModalDeConfirmacao()">Salvar Alterações</button>
                </div>
                <!-- Modal de confirmação -->
                <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmationModalLabel">Confirmação de Alteração</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                            Tem certeza que deseja editar esses dados?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-danger">Confirmar Alteração</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim do modal -->
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('js/profiles/edit.js') }}"></script>
@include('../layout/footer')