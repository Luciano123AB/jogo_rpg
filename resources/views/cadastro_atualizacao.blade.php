@extends("layouts.main_layout")

@section("content")
    <div class="container w-75">
        <div class="{{ session("tema") == "escuro" ? "fundos_card_claro" : "fundos_card_escuro" }} card p-3">
            <div class="d-grid gap-3">
                <div class="sombras card {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-black border-danger" }} p-3">
                    @php

                        $rota = "confirmarCadastrar";
                        $titulo = "Novo Usuário";
                        $id = "";
                        $values = ["", "", "", ""];
                        $classe = "vazio";

                        if ($pagina == "Atualização") {
                            
                            $rota = "confirmarAtualizar";
                            $titulo = "Atualizar Usuário";
                            $id = $dados["id"];
                            $values = [$dados["usuario"], $dados["senha"], $dados["confirmar_senha"], $dados["classe"]];
                            $classe = $values[3];

                        }
                    @endphp

                    <form action="{{ route("$rota") }}" method="post" novalidate>
                        @csrf

                        <input type="hidden" value="{{ $id }}">

                        <div class="card-header border border-2 {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} text-center rounded-top">
                            @if ($pagina == "Cadastro")
                                <i class="bi bi-plus-circle-fill {{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }} fw-bold fs-5"></i>
                            @else
                                <i class="bi bi-arrow-repeat {{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }} fw-bold fs-5"></i>
                            @endif
                            <Label class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }} fw-bold fs-5">{{ $titulo }}</Label>
                        </div>

                        <div class="card-body border-start border-2 border-end {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }}">
                            <label class="form-label {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">{{ $pagina == "Cadastro" ? "Usuário" : "Novo Usuário" }}:</label>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-light border-primary" : "cor_fontes_claro bg-dark border-danger" }}"><i class="bi bi-person-fill"></i></span>
                                    <input type="text" id="novo_usuario" class="form-control cursor {{ session("tema") == "escuro" ? "bg-light border-primary text-black" : "bg-dark border-danger text-white" }}" name="novo_usuario" placeholder="Username123" aria-label="Username123" aria-describedby="NovoUsuario" value="{{ old("novo_usuario", $values[0]) }}">
                                </div>
                                @error("novo_usuario")
                                    <div class="alert alert-danger mt-1 mb-0" role="alert">
                                        <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>
    
                            <label class="form-label {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">{{ $pagina == "Cadastro" ? "Senha" : "Nova Senha" }}:</label>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-light border-primary" : "cor_fontes_claro bg-dark border-danger" }}">***</span>
                                    <input type="password" id="nova_senha" class="form-control cursor {{ session("tema") == "escuro" ? "bg-light border-primary text-black" : "bg-dark border-danger text-white" }}" name="nova_senha" placeholder="..." aria-label="..." aria-describedby="NovaSenha" value="{{ old("nova_senha", $values[1]) }}">
                                    <button type="button" id="mostrar_novo" class="cursor input-group-text {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-light border-primary" : "cor_fontes_claro bg-dark border-danger" }}"><i class="cursor bi bi-eye-slash-fill"></i></button>
                                </div>
                                @error("nova_senha")
                                    <div class="alert alert-danger mt-1 mb-0" role="alert">
                                        <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                    </div>
                                @enderror

                                @error("senhas")
                                    <div class="alert alert-danger mt-1 mb-0" role="alert">
                                        <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <label class="form-label {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">{{ $pagina == "Cadastro" ? "Confirmar Senha" : "Confirmar Nova Senha" }}:</label>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-light border-primary" : "cor_fontes_claro bg-dark border-danger" }}">***</span>
                                    <input type="password" id="confirmar_nova_senha" class="form-control cursor {{ session("tema") == "escuro" ? "bg-light border-primary text-black" : "bg-dark border-danger text-white" }}" name="confirmar_nova_senha" placeholder="..." aria-label="..." aria-describedby="ConfirmarNovaSenha" value="{{ old("confirmar_nova_senha", $values[2]) }}">
                                    <button type="button" id="mostrar_confirmar_novo" class="cursor input-group-text {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-light border-primary" : "cor_fontes_claro bg-dark border-danger" }}"><i class="cursor bi bi-eye-slash-fill"></i></button>
                                </div>
                                @error("confirmar_nova_senha")
                                    <div class="alert alert-danger mt-1 mb-0" role="alert">
                                        <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                    </div>
                                @enderror

                                @error("senhas")
                                    <div class="alert alert-danger mt-1 mb-0" role="alert">
                                        <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>
    
                            <div class="d-flex gap-3 mb-3">
                                <div>
                                    <label class="form-label {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">{{ $pagina == "Cadastro" ? "Classe" : "Nova Classe" }}:</label>
                                    <div class="input-group">
                                        <span class="input-group-text {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-light border-primary" : "cor_fontes_claro bg-dark border-danger" }}"><i class="bi bi-sort-down"></i></span>
                                        <select id="classe" class="form-select cursor {{ session("tema") == "escuro" ? "bg-light border-primary text-black" : "bg-dark border-danger text-white" }}" name="classe" aria-label="Classes">
                                            <option selected>Selecione sua classe...</option>
                                            @foreach ($personagens as $personagem)
                                                <option value="{{ $personagem->classe }}" {{ old("classe", $values[3]) == "$personagem->classe" ? "selected" : "" }}>
                                                    @if($personagem->classe == "Guerreiro")
                                                        🛡️
                                                    @elseif($personagem->classe == "Mago")
                                                        🔮
                                                    @else
                                                        🗡️
                                                    @endif
                                                    {{ $personagem->classe }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error("classe")
                                        <div class="alert alert-danger mt-1" role="alert">
                                            <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>
    
                                <div>
                                    <label class="form-label {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}"><i class="bi bi-person-circle"></i> {{ $pagina == "Cadastro" ? "Perfil" : "Novo Perfil" }}:</label>
                                    <div>
                                        <img src="{{ asset('assets/images/perfils/' . $classe . '_perfil.png') }}" id="perfil_cadastro" class="border border-3 border-light rounded-circle">
                                    </div>
                                </div>
                            </div>
    
                            @error("playerExiste")
                                <div class="d-flex justify-content-center">
                                    <div class="alert alert-danger text-center w-50" role="alert">
                                        <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div class="card-footer border border-2 {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} d-flex justify-content-center gap-3 text-center py-3">
                            <button type="submit" class="cursor sombras botoes animate__animated animate__fadeIn btn {{ session("tema") == "escuro" ? "btn-light border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }}">
                                <span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">
                                    @if ($pagina == "Cadastro")
                                        <i class="cursor bi bi-person-plus-fill"></i>
                                    @else
                                        <i class="cursor bi bi-save-fill"></i>
                                    @endif                                    
                                    {{ $pagina == "Cadastro" ? "Cadastrar" : "Atualizar" }}
                                </span>
                            </button>
                            <button type="button" class="cursor sombras botoes animate__animated animate__fadeIn btn {{ session("tema") == "escuro" ? "btn-light border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }}" onclick="limparCamposCadastro()"><span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}"><i class="cursor bi bi-x-circle-fill"></i> Limpar</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection