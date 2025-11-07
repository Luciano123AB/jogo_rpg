@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="{{ session("tema") == "escuro" ? "fundo_card_claro" : "fundo_card_escuro" }} card p-3">
            <div class="animate__animated animate__fadeInLeft card-group gap-3 w-100">
                <div class="cards sombra card {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded">
                    <div class="card-header text-center border-bottom">
                        <h4 class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title">Guerreiro</h4>
                    </div>

                    <img src="{{ asset("assets/images/personagens/guerreiro.png") }}" class="card-img-top border-bottom" alt="...">
                    
                    <div class="card-body">
                        <h5 class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title text-center fw-bold">Sobre:</h5>
                        <p class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-text text-center">O Guerreiro é a personificação da força e da honra. Treinado para o combate corpo a corpo, domina o uso de espadas, escudos e armaduras pesadas. Sua função é proteger seus aliados e manter a linha de frente em qualquer batalha. Fiel ao código da coragem e disciplina, o guerreiro enfrenta o perigo de frente, confiando tanto em sua lâmina quanto em sua determinação.</p>
                        
                        <h5 class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title border-top fw-bold">Atributos:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Tipo de dano: Físico</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Alcance: Curta distância</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Defesa: Alta</li>
                        </ul>
                    </div>
                </div>

                <div class="cards sombra card {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} {{ session("tema") == "escuro" ? "border-start border-primary" : "border-start border-danger" }} rounded">
                    <div class="card-header text-center border-bottom">
                        <h4 class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title">Mago</h4>
                    </div>

                    <img src="{{ asset("assets/images/personagens/mago.png") }}" class="card-img-top border-bottom" alt="...">
                    
                    <div class="card-body">
                        <h5 class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title text-center fw-bold">Sobre:</h5>
                        <p class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-text text-center">O Mago é o mestre do conhecimento e do poder arcano. Munido de seu cajado e sabedoria ancestral, manipula as forças da natureza e do além para atacar, defender ou curar. Embora fisicamente frágil, sua mente é uma arma formidável, capaz de alterar o curso de uma guerra com um único feitiço. Sua presença inspira respeito e temor em igual medida.</p>
                        
                        <h5 class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title border-top fw-bold">Atributos:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Tipo de dano: Mágico</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Alcance: Longa distância</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Defesa: Baixa</li>
                        </ul>
                    </div>
                </div>

                <div class="cards sombra card {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} {{ session("tema") == "escuro" ? "border-start border-primary" : "border-start border-danger" }} rounded">
                    <div class="card-header text-center border-bottom">
                        <h4 class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title">Assassino</h4>
                    </div>

                    <img src="{{ asset("assets/images/personagens/assassino.png") }}" class="card-img-top border-bottom" alt="...">
                    
                    <div class="card-body">
                        <h5 class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title text-center fw-bold">Sobre:</h5>
                        <p class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-text text-center">O Assassino é o predador das sombras. Ágil, preciso e mortal, prefere o silêncio à força bruta. Treinado em técnicas furtivas e no uso de lâminas curtas, ele elimina seus alvos antes que possam reagir. Sua lealdade é incerta, sua presença quase imperceptível — e quando o inimigo o percebe, já é tarde demais.</p>
                        
                        <h5 class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title border-top fw-bold">Atributos:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Tipo de dano: Físico</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Alcance: Curta distância</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} list-group-item">Defesa: Média</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection