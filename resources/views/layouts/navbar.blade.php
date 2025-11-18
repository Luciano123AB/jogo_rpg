<nav id="navbar" class="navbar navbar-expand-lg {{ session("tema") == "escuro" ? "bg-light border-primary" : "bg-black border-danger" }} border-5 rounded-bottom-5 mb-4">
    <div class="container-fluid">
        <a href="{{ route("home") }}" id="home" class="cursor navbar-brand">
            <img src="{{ asset("assets/images/icone.png") }}" id="icone" class="cursor animate__animated animate__flipOutY animate__infinite">
            <span class="align-middle fs-3">🎮</span>
            <span class="cursor {{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }} fw-bold align-middle fs-3">Projeto: Jogo RPG</span>
            <span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }} animate__animated animate__fadeIn align-middle fs-3">- 
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
                @elseif($pagina == "Atualização")
                    <i class="cursor bi bi-person-fill-down"></i>
                @elseif($pagina == "Listagem")
                    <i class="bi bi-list-stars"></i>
                @elseif($pagina == "Batalha" || $pagina == "Preparação")
                    ⚔️
                @endif
                {{ $pagina }}
            </span>
        </a>

        @if($pagina != "Home" && $pagina != "Batalha")
            <a href="{{ route("home") }}" class="cursor sombras botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} d-flex border my-1">
                <span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}"><i class="cursor bi bi-arrow-90deg-left"></i> Voltar</span>
            </a>
        @endif

        @if($pagina == "Batalha")
            <a href="{{ route("confirmarRender") }}" class="cursor sombras botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} d-flex border my-1">
                <span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}"><i class="cursor bi bi-arrow-90deg-left"></i> Render-se</span>
            </a>
        @endif

        @if($pagina != "Listagem" && $pagina != "Batalha")
            <a href="{{ route("listagem") }}" class="cursor sombras botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} d-flex border my-1">
                <span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}"><i class="bi bi-list-stars"></i> Lista de Players</span>
            </a>
        @endif

        @if(session()->has("player") && $pagina != "Batalha")
            <div class="d-flex">
                <div class="input-group my-1">
                    <button class="cursor sombras animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} dropdown-toggle d-flex border" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-grid">
                            <div class="cursor d-flex">
                                <img src="{{ asset("assets/images/perfils/" . (session("player.personagem.classe")) . "_perfil.png") }}" id="perfil_player" class="cursor sombras border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded-circle me-2">
                                <div class="cursor">
                                    <h4 class="cursor {{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }}">{{ session("player.usuario") }}</h4>
                                    <span class="cursor {{ session("tema") == "escuro" ? "cor_niveis" : "text-danger" }}">Nível: {{ session("player.nivel") }}</span>
                                </div>
                            </div>
                            <div class="cursor barras progress border {{ session("tema") == "escuro" ? "border-primary" : "border-success" }} bg-black" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated {{ session("tema") == "escuro" ? "bg-primary" : "bg-success" }}" style="width: {{ session("xp") }}%"><label class="cursor fw-bold fs-6">XP</label></div>
                            </div>
                        </div>
                    </button>
                    <ul class="dropdown-menu animate__animated animate__fadeInDown {{ session("tema") == "escuro" ? "bg-primary" : "bg-danger" }}">
                        <li><a class="dropdown-item {{ session("tema") == "escuro" ? "cor_fontes_escuro opcoes_player_escuro" : "cor_fontes_claro opcoes_player_claro" }}" href="{{ route("atualizacao") }}">Editar</a></li>
                        <li><a class="dropdown-item {{ session("tema") == "escuro" ? "cor_fontes_escuro opcoes_player_escuro" : "cor_fontes_claro opcoes_player_claro" }}" href="{{ route("confirmarDeletar") }}">Excluir Conta</a></li>
                        <li><a class="dropdown-item {{ session("tema") == "escuro" ? "cor_fontes_escuro opcoes_player_escuro" : "cor_fontes_claro opcoes_player_claro" }}" href="{{ route("confirmarSair") }}">Sair</a></li>
                    </ul>
                </div>
            </div>
        @elseif($pagina != "Batalha")
            <div class="d-flex gap-3 my-1">
                @if($pagina != "Cadastro")
                    <a href="{{ route("cadastro") }}" class="cursor sombras botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} d-flex border">
                        <span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}"><i class="cursor bi bi-person-fill-add"></i> Cadastrar</span>
                    </a>
                @endif

                <div class="dropdown">
                    <button class="cursor sombras botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} dropdown-toggle d-flex border" type="button" data-bs-toggle="dropdown" aria-expanded="{{ $errors->any() ? 'true' : 'false' }}" data-bs-auto-close="false">
                        <span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}"><i class="cursor bi bi-box-arrow-in-right"></i> Logar</span>
                    </button>
                    <form action="{{ route("logar") }}" method="POST" id="login" class="sombras animate__animated animate__fadeInDown {{ session("tema") == "escuro" ? 'bg-secondary border-primary' : 'bg-black border-danger' }} dropdown-menu dropdown-menu-end p-3">
                        @csrf

                        <label class="form-label {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">Usuário:</label>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-light border-primary" : "cor_fontes_claro bg-dark border-danger" }}"><i class="bi bi-person-fill"></i></span>
                                <input type="text" id="usuario" class="form-control cursor {{ session("tema") == "escuro" ? "bg-light border-primary text-black" : "bg-dark border-danger text-white" }}" name="usuario" placeholder="Username123" aria-label="Username123" aria-describedby="Usuario" value="{{ old("usuario") }}">
                            </div>
                            @error("usuario")
                                <div class="alert alert-danger mt-1 mb-0" role="alert">
                                    <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <label class="form-label {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">Senha:</label>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-light border-primary" : "cor_fontes_claro bg-dark border-danger" }}">***</span>
                                <input type="password" id="senha" class="form-control cursor {{ session("tema") == "escuro" ? "bg-light border-primary text-black" : "bg-dark border-danger text-white" }}" name="senha" placeholder="..." aria-label="..." aria-describedby="Senha" value="{{ old("senha") }}">
                                <button type="button" id="mostrar" class="cursor input-group-text {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-light border-primary" : "cor_fontes_claro bg-dark border-danger" }}"><i class="cursor bi bi-eye-slash-fill"></i></button>
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
                            <button type="submit" class="cursor sombras botoes animate__animated animate__fadeIn btn {{ session("tema") == "escuro" ? "btn-light border-primary" : "btn-dark border-danger" }}"><span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}"><i class="cursor bi bi-door-open-fill"></i> Entrar</span></button>
                            <button type="button" class="cursor sombras botoes animate__animated animate__fadeIn btn {{ session("tema") == "escuro" ? "btn-light border-primary" : "btn-dark border-danger" }}" onclick="limparCamposLogin()"><span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}"><i class="cursor bi bi-x-circle-fill"></i> Limpar</span></button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </div>
</nav>