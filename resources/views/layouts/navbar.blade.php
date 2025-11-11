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
            <a href="{{ route("home") }}" class="cursor sombra botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} d-flex border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} {{ session("tema") == "escuro" ? "focus-ring focus-ring-primary" : "focus-ring focus-ring-danger" }} my-1">
                <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-arrow-90deg-left"></i> Voltar</span>
            </a>
        @endif

        @if(session()->has("player"))
            <div class="d-flex">
                <div class="input-group my-1">
                    <button class="cursor sombra animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} dropdown-toggle d-flex border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} {{ session("tema") == "escuro" ? "focus-ring focus-ring-primary" : "focus-ring focus-ring-danger" }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="cursor">
                            <img src="{{ asset("assets/images/perfils/" . (session("player.personagem.classe")) . "_perfil.png") }}" id="perfil_player" class="cursor sombra border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded-circle">
                            <span class="cursor {{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">{{ session("player.usuario") }}</span>
                        </div>
                    </button>
                    <ul class="dropdown-menu {{ session("tema") == "escuro" ? "bg-primary" : "bg-danger" }}">
                        <li><a class="dropdown-item {{ session("tema") == "escuro" ? "cor_fonte_escuro bg-light" : "cor_fonte_claro bg-dark" }}" href="{{ "" }}">Editar</a></li>
                        <li><a class="dropdown-item {{ session("tema") == "escuro" ? "cor_fonte_escuro bg-light" : "cor_fonte_claro bg-dark" }}" href="{{ "" }}">Excluir</a></li>
                        <li><a class="dropdown-item {{ session("tema") == "escuro" ? "cor_fonte_escuro bg-light" : "cor_fonte_claro bg-dark" }}" href="{{ route("confirmarSair") }}">Sair</a></li>
                    </ul>
                </div>
            </div>
        @else
            <div class="d-flex gap-3 my-1">
                @if($pagina != "Cadastro")
                    <a href="{{ route("cadastro") }}" class="cursor sombra botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} d-flex border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} {{ session("tema") == "escuro" ? "focus-ring focus-ring-primary" : "focus-ring focus-ring-danger" }}">
                        <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-person-fill-add"></i> Cadastrar</span>
                    </a>
                @endif

                <div class="dropdown">
                    <button class="cursor sombra botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} dropdown-toggle d-flex border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} {{ session("tema") == "escuro" ? "focus-ring focus-ring-primary" : "focus-ring focus-ring-danger" }}" type="button" data-bs-toggle="dropdown" aria-expanded="{{ $errors->any() ? 'true' : 'false' }}" data-bs-auto-close="inside">
                        <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-box-arrow-in-right"></i> Logar</span>
                    </button>
                    <form action="{{ route("logar") }}" method="POST" class="sombra {{ $errors->any() ? 'animate__animated animate__fadeIn' : 'animate__animated animate__fadeInDown' }} dropdown-menu dropdown-menu-end {{ session("tema") == "escuro" ? "bg-secondary" : "bg-black" }} {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} p-3 {{ $errors->any() ? 'show' : '' }}">
                        @csrf

                        <label class="form-label {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">Usuário:</label>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text {{ session("tema") == "escuro" ? "cor_fonte_escuro bg-light border-primary" : "cor_fonte_claro bg-dark border-danger" }}"><i class="bi bi-person-fill"></i></span>
                                <input type="text" id="usuario" class="form-control cursor {{ session("tema") == "escuro" ? "bg-light border-primary text-black" : "bg-dark border-danger text-white" }}" name="usuario" placeholder="Username123" aria-label="Username123" aria-describedby="basic-addon1" value="{{ old("usuario") }}">
                            </div>
                            @error("usuario")
                                <div class="alert alert-danger mt-1 mb-0" role="alert">
                                    <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <label class="form-label {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">Senha:</label>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text {{ session("tema") == "escuro" ? "cor_fonte_escuro bg-light border-primary" : "cor_fonte_claro bg-dark border-danger" }}">***</span>
                                <input type="password" id="senha" class="form-control cursor {{ session("tema") == "escuro" ? "bg-light border-primary text-black" : "bg-dark border-danger text-white" }}" name="senha" placeholder="..." aria-label=".." aria-describedby="basic-addon1" value="{{ old("senha") }}">
                                <button type="button" id="mostrar" class="cursor input-group-text {{ session("tema") == "escuro" ? "cor_fonte_escuro bg-light border-primary" : "cor_fonte_claro bg-dark border-danger" }}"><i class="cursor bi bi-eye-slash-fill"></i></button>
                            </div>
                            @error("senha")
                                <div class="alert alert-danger mt-1 mb-0" role="alert">
                                    <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        @error("playerNaoExiste")
                            <div class="d-flex justify-content-center">
                                <div class="alert alert-danger text-center w-50" role="alert">
                                    <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                </div>
                            </div>
                        @enderror

                        <div class="d-flex justify-content-center gap-3 text-center">
                            <button type="submit" class="cursor sombra botoes animate__animated animate__fadeIn btn {{ session("tema") == "escuro" ? "btn-light" : "btn-dark" }} {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }}"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-door-open-fill"></i> Entrar</span></button>
                            <button type="button" class="cursor sombra botoes animate__animated animate__fadeIn btn {{ session("tema") == "escuro" ? "btn-light" : "btn-dark" }} {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }}" onclick="limparCamposLogin()"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-x-circle-fill"></i> Limpar</span></button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </div>
</nav>