@include('layout/header')
<div>
    <!--Início carousel-->
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
                    <h5><a class="a-carousel" href="{{ route('concursos') }}">Concursos</a></h5>
                    <p class="p-carousel">Veja o histórico de todos os concuros.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/estatisticas.jpg') }}" class="d-block w-100" alt="Estatísticas">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a class="a-carousel" href="{{ route('estatisticas') }}">Estatísticas</a></h5>
                    <p class="p-carousel">Aqui você tem informação sobre diversas estatísticas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/sorteador.jpg') }}" class="d-block w-100" alt="Sorteador">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a class="a-carousel" href="{{ route('sorteador') }}">Sorteador de números</a></h5>
                    <p class="p-carousel">Acha que não tem bons palpites? Talvez o algorítmo possa te ajudar!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/aposta.jpg') }}" class="d-block w-100" alt="Apostas">
                <div class="carousel-caption d-none d-md-block">
                    <!--Início modal carousel-->
                    @if (auth()->check())
                        <h5><a class="a-carousel" href="{{ route('apostas') }}">Minhas apostas</a></h5>
                    @else
                        <h5><a class="a-carousel" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Minhas apostas</a></h5>
                    @endif
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

