@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="{{ session("tema") == "escuro" ? "fundos_card_claro" : "fundos_card_escuro" }} card p-3">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col animate__animated animate__fadeInLeft">
                    <div class="cards sombras card {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }}">
                        <img src="{{ asset("assets/images/regras/" . (session("tema") == "escuro" ? "barras_vida.png" : "barras_vida_noite.png")) }}" class="card-img-top border-bottom {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }}">
                        <div class="card-body">
                            <h4 class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }} card-title"><i class="bi bi-heart-fill me-1"></i>Barra de HP</h4>
                            <p class="paragrafos {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }} card-text">Essa é a quantidade de vida de cada personagem, conforme a batalha for acontecendo, essas barras irão diminuindo a cada ataque do seu oponente.</p>
                        </div>
                    </div>
                </div>

                <div class="col animate__animated animate__fadeInRight">
                    <div class="cards sombras card {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }}">
                        <img src="{{ asset("assets/images/regras/" . (session("tema") == "escuro" ? "skills.png" : "skills_noite.png")) }}" class="card-img-top border-bottom {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }}">
                        <div class="card-body">
                            <h4 class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }} card-title"><i class="bi bi-joystick me-1"></i>Skills/Ataques</h4>
                            <p class="paragrafos {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }} card-text">Esses são os tipos de ofensivas que cada personagem possuí, cada uma deles podem ser utilizados apenas 1 vez a cada 3 rodadas.</p>
                        </div>
                    </div>
                </div>

                <div class="col animate__animated animate__fadeInLeft">
                    <div class="cards sombras card {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }}">
                        <img src="{{ asset("assets/images/regras/" . (session("tema") == "escuro" ? "contador_dano.png" : "contador_dano_noite.png")) }}" class="card-img-top border-bottom {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }}">
                        <div class="card-body">
                            <h4 class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }} card-title"><i class="bi bi-crosshair2 me-1"></i>Contador de Dano</h4>
                            <p class="paragrafos {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }} card-text">Esses números debaixo das barras de vida irão ser exibidos toda vez que você ou seu oponente desferir um ataque, a quantidade de dano de cada skill nem sempre será igual.</p>
                        </div>
                    </div>
                </div>

                <div class="col animate__animated animate__fadeInRight">
                    <div class="cards sombras card {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }}">
                        <img src="{{ asset("assets/images/regras/" . (session("tema") == "escuro" ? "final.png" : "final_noite.png")) }}" class="card-img-top border-bottom {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }}">
                        <div class="card-body">
                            <h4 class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }} card-title"><i class="bi bi-award-fill me-1"></i>Vitória/Derrota</h4>
                            <p class="paragrafos {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }} card-text">Caso a barra de vida do seu oponente cheque ao fim, você vence a batalha, mas caso a sua barra de vida acabe zerando primeiro, você perde.</p>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
@endsection