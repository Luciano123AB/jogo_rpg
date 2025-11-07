<nav id="navbar" class="navbar navbar-expand-lg {{ session("tema") == "escuro" ? "bg-light" : "bg-black" }} border-5 {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded-bottom-5 mb-4">
    <div class="container-fluid">
        <a href="{{ route("home") }}" id="home" class="cursor navbar-brand">
            <img src="{{ asset("assets/images/icone.png") }}" id="icone" class="cursor">
            <span class="cursor {{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} fw-bold align-middle fs-3">Projeto: Jogo RPG</span>
            <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeIn align-middle fs-3">- {{ $pagina }}</span>
        </a>

        @if($pagina != "Home")
            <a href="{{ route("home") }}" class="cursor sombra botoes btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} d-flex border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} focus-ring focus-ring-danger my-1">
                <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-arrow-90deg-left"></i> Voltar</span>
            </a>
        @endif

        <div class="d-flex gap-3 my-1">
            <button class="cursor sombra botoes btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} d-flex border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} focus-ring focus-ring-danger">
                <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-person-add"></i> Cadastrar</span>
            </button>
                
            <button class="cursor sombra botoes btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} d-flex border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} focus-ring focus-ring-danger">
                <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-box-arrow-in-right"></i> Logar</span>
            </button>
        </div>
    </div>
</nav>