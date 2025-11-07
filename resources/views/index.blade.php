@extends("layouts.main_layout")

@section("content")
    <div class="container text-center w-50">
        <div class="{{ session("tema") == "escuro" ? "fundo_card_claro" : "fundo_card_escuro" }} card p-3">
            <div class="animate__animated animate__fadeInDown d-grid gap-3">
                <button class="cursor sombra botoes btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} border border-3 {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} focus-ring focus-ring-danger"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><img src="https://www.svgrepo.com/show/276071/sword.svg" id="icone_batalhar" class="cursor"> Batalhar!</span></button>
                <a href="{{ route("regras") }}" class="cursor sombra botoes btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} border border-3 {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} focus-ring focus-ring-danger"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-question-circle"></i> Como Jogar?/Regras</span></a>
                <a href="{{ route("sobre") }}" class="cursor sombra botoes btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} border border-3 {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} focus-ring focus-ring-danger"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-person-lines-fill"></i> Sobre as Classes</span></a>
                <a href="{{ route("creditos") }}" class="cursor sombra botoes btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} border border-3 {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} focus-ring focus-ring-danger"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-body-text"></i> Créditos</span></a>
            </div>
        </div>
    </div>
@endsection