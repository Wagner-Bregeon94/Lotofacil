<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Lotofácil</title>

    @yield('css')

</head>
<!--Início barra de navegação-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><i class="fas fa-home"></i> Início</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="concursos">Concursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="estatisticas">Estatísticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sorteador">Sorteador de números</a>
                </li>

                <!--Início modal barra de navegação-->
                <li class="nav-item">
                    <a class="nav-link" href="apostas" data-bs-toggle="modal" data-bs-target="#myModal">Minhas apostas</a>
                    <div class="modal" tabindex="-1" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Minhas apostas</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Lembre-se de que nesse site suas apostas não tem validação oficial. Essa área é apenas para você manter seus palpites salvos. </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" id="prosseguirBtn">Prosseguir</button>
                                    <script>
                                        document.getElementById('prosseguirBtn').addEventListener('click', function() {
                                            window.location.href = 'apostas';
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Fim modal barra de navegação-->

                <li class="nav-item dropdown">
                    @if(Auth::check())
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bem-vindo, {{ Auth::user()->name }} !
                        </a>
                        <ul class="dropdown-menu">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Sair</button>
                            </form>
                        </ul>
                    @else
                        <a class="nav-link dropdown-toggle" href="login" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Fazer login</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Cadastre-se</a></li>
                        </ul>
                    @endif
                </li>
                
                <!--
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
                -->
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Ex: 1536" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar concurso</button>
            </form>
        </div>
    </div>
</nav>
<script src="{{ asset('js/script.js') }}"></script>
<!--Fim barra de navegação-->
<body>