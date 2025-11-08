@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="{{ session("tema") == "escuro" ? "fundo_card_claro" : "fundo_card_escuro" }} card p-3">
            <div class="animate__animated animate__fadeInLeft card-group gap-3 w-100">
                @foreach ($personagens as $personagem)
                    <div class="cards sombra card {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded">
                        <div class="card-header text-center border-bottom">
                            <h4 class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title">{{ $personagem->classe }}</h4>
                        </div>

                        <img src="{{ asset("assets/images/personagens/$personagem->imagem") }}" class="card-img-top border-bottom" alt="...">
                        
                        <div class="card-body">
                            <h5 class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title text-center fw-bold">Sobre:</h5>
                            <p class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-text text-center">{{ $personagem->descricao }}</p>                            
                        </div>    

                        <div class="card-body border-top">
                            <h5 class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title fw-bold">Atributos:</h5>
                            <ul class="list-group list-group-flush">
                                <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Tipo de dano: {{ $personagem->tipo_dano }}</li>
                                <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Alcance: {{ $personagem->alcance }} distância</li>
                                <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Vida: {{ $personagem->vida }}</li>
                                <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Defesa: {{ $personagem->defesa }}</li>
                            </ul>
                        </div>

                        <div class="card-body border-top">
                            <h5 class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title fw-bold">Skills:</h5>
                            <ul class="list-group list-group-flush">
                                <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">1 - {{ $personagem->skill01?->skill }}</li>
                                <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">2 - {{ $personagem->skill02?->skill }}</li>
                                <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">3 - {{ $personagem->skill03?->skill }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection