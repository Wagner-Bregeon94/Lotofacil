<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="style/css/style.css">
    <title>Lotofácil</title>
</head>
<body>
    <div class="container">
        <div class="alert alert-warning text-center" role="alert">
            <strong>Atenção!</strong> Este não é um site oficial da caixa, portanto não há como fazer uma aposta válida aqui. Se essa for a sua intenção, <a href="https://loterias.caixa.gov.br/Paginas/Lotofacil.aspx" class="alert-link" target="_blank">clique aqui</a> para ser direcionado a outra página com o site oficial da caixa, onde você poderá oficializar sua aposta.
        </div>
    </div>

    <!--Início barra de navegação-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Início</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://loterias.caixa.gov.br/Paginas/Download-Resultados.aspx" target="_blank">Concursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="estatisticas.html">Estatísticas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sorteador.php">Sorteador de números</a>
                    </li>

                    <!--Início modal 1-->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Minhas apostas</a>
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
                                                window.location.href = 'apostas.html';
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--Fim modal 1-->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Fazer login</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Cadastre-se</a></li>
                        </ul>
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
    <!--Fim barra de navegação-->

    <!--Início carrossel-->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/lotofacil.jpg" class="d-block w-100" alt="Concursos">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a href="https://loterias.caixa.gov.br/Paginas/Download-Resultados.aspx" target="_blank">Concursos</a></h5>
                    <p>Veja o histórico de todos os concuros.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/estatisticas.jpg" class="d-block w-100" alt="Estatísticas">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a href="estatisticas.html">Estatísticas</a></h5>
                    <p>Aqui você tem informação sobre diversas estatísticas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/sorteador.jpg" class="d-block w-100" alt="Sorteador">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a href="sorteador.php">Sorteador de números</a></h5>
                    <p>Acha que não tem bons palpites? Talvez o algorítmo possa te ajudar!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/aposta.jpg" class="d-block w-100" alt="Apostas">
                <div class="carousel-caption d-none d-md-block">
                    <!--Início modal 2-->
                        <h5><a href="#" data-bs-toggle="modal" data-bs-target="#myModal">Minhas apostas</a></h5>
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
                                                window.location.href = 'apostas.html';
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--Fim modal 2-->
                    <p>Deixe salvo seus palpites para futuras apostas, ou apenas para acompanhar como anda a sua sorte.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button"     data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Fim carrossel-->

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
   
    <footer>
        
    </footer>
</body>
</html>