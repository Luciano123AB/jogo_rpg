@extends("layouts.main_layout")

@section("content")
    <div class="container text-center w-50">
        <div class="{{ session("tema") == "escuro" ? "fundo_card_claro" : "fundo_card_escuro" }} card p-3">
            <div class="animate__animated animate__fadeInDown d-grid gap-3">
                <a href="{{ route("preparacao") }}" class="cursor sombra botoes btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} border border-3"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">⚔️ Batalhar!</span></a>
                <a href="{{ route("regras") }}" class="cursor sombra botoes btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} border border-3"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-question-circle-fill"></i> Como Jogar?/Regras</span></a>
                <a href="{{ route("sobre") }}" class="cursor sombra botoes btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} border border-3"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-person-lines-fill"></i> Sobre as Classes</span></a>
                <a href="{{ route("creditos") }}" class="cursor sombra botoes btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} border border-3"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-body-text"></i> Créditos</span></a>
            </div>
        </div>
    </div>
@endsection