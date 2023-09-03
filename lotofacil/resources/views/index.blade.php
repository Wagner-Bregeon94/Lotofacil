@include('layout/header')
<div>
    <!--Início carousel-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/lotofacil.jpg') }}" class="d-block w-100" alt="Concursos">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a class="a-carousel" href="concursos">Concursos</a></h5>
                    <p class="p-carousel">Veja o histórico de todos os concuros.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/estatisticas.jpg') }}" class="d-block w-100" alt="Estatísticas">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a class="a-carousel" href="estatisticas">Estatísticas</a></h5>
                    <p class="p-carousel">Aqui você tem informação sobre diversas estatísticas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/sorteador.jpg') }}" class="d-block w-100" alt="Sorteador">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a class="a-carousel" href="sorteador">Sorteador de números</a></h5>
                    <p class="p-carousel">Acha que não tem bons palpites? Talvez o algorítmo possa te ajudar!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/aposta.jpg') }}" class="d-block w-100" alt="Apostas">
                <div class="carousel-caption d-none d-md-block">
                    <!--Início modal carousel-->
                    <h5><a class="a-carousel" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Minhas apostas</a></h5>
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
                    <!--Fim modal carousel-->
                    <p class="p-carousel">Deixe salvo seus palpites para futuras apostas, ou apenas para acompanhar como anda a sua sorte.</p>
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
    <!--Fim carousel-->
</div>
@include('layout/footer')

