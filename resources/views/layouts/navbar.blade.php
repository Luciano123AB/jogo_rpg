<nav id="navbar" class="navbar navbar-expand-lg {{ session("tema") == "escuro" ? "bg-light" : "bg-black" }} border-5 {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded-bottom-5 mb-4">
    <div class="container-fluid">
        <a href="{{ route("home") }}" id="home" class="cursor navbar-brand">
            <img src="{{ asset("assets/images/icone.png") }}" id="icone" class="cursor">
            <span class="cursor {{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} fw-bold align-middle fs-3">Projeto: Jogo RPG</span>
            <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeIn align-middle fs-3">- 
                @if ($pagina == "Home")
                    <i class="bi bi-house-fill"></i>
                @elseif($pagina == "Créditos")
                    <i class="cursor bi bi-body-text"></i>
                @elseif($pagina == "Descrições")
                    <i class="cursor bi bi-person-lines-fill"></i>
                @elseif($pagina == "Regras")
                    <i class="cursor bi bi-question-circle-fill"></i>
                @elseif($pagina == "Cadastro")
                    <i class="cursor bi bi-person-fill-add"></i>
                @elseif($pagina == "Batalha" || $pagina == "Preparação")
                    ⚔️
                @endif
                {{ $pagina }}
            </span>
        </a>

        @if($pagina != "Home")
            <a href="{{ route("home") }}" class="cursor sombra botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} d-flex border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} focus-ring focus-ring-danger my-1">
                <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-arrow-90deg-left"></i> Voltar</span>
            </a>
        @endif

        @session("player")
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">{{ session("player.usuario") }}</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ "" }}">Editar</a></li>
                    <li><a class="dropdown-item" href="{{ "" }}">Excluir</a></li>
                    <li><a class="dropdown-item" href="{{ "" }}">Sair</a></li>
                </ul>
            </div>
        @else
            <div class="d-flex gap-3 my-1">
                @if($pagina != "Cadastro")
                    <a href="{{ route("cadastro") }}" class="cursor sombra botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} d-flex border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} focus-ring focus-ring-danger">
                        <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-person-fill-add"></i> Cadastrar</span>
                    </a>
                @endif

                <button class="cursor sombra botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} d-flex border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} focus-ring focus-ring-danger">
                    <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-box-arrow-in-right"></i> Logar</span>
                </button>
            </div>            
        @endsession
    </div>
</nav>