@extends("layouts.main_layout")

@section("content")
    <div class="container w-75">
        <div class="{{ session("tema") == "escuro" ? "fundo_card_claro" : "fundo_card_escuro" }} card p-3">
            <div class="d-grid gap-3">
                <div class="sombra card {{ session("tema") == "escuro" ? "bg-secondary" : "bg-black" }} {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} p-3">
                    <form action="{{ route("cadastrar") }}" method="post" novalidate>
                        @csrf

                        <label class="form-label {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">Usuário:</label>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" id="usuario" class="form-control cursor" name="usuario" placeholder="Username123" aria-label="Username123" aria-describedby="basic-addon1" value="{{ old("usuario") }}">
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
                                <span class="input-group-text">***</span>
                                <input type="password" id="senha" class="form-control cursor" name="senha" placeholder="..." aria-label=".." aria-describedby="basic-addon1" value="{{ old("senha") }}">
                                <button type="button" id="mostrar" class="cursor input-group-text"><i class="cursor bi bi-eye-slash-fill"></i></button>
                            </div>
                            @error("senha")
                                <div class="alert alert-danger mt-1 mb-0" role="alert">
                                    <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex gap-3 mb-3">
                            <div>
                                <label class="form-label {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">Classe:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-sort-down"></i></span>
                                    <select id="classe" class="form-select cursor" name="classe" aria-label="Classes">
                                        <option selected>Selecione sua classe...</option>
                                        @foreach ($personagens as $personagem)
                                            <option value="{{ $personagem->classe }}" {{ old("classe") == "$personagem->classe" ? "selected" : "" }}>
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
                                <label class="form-label {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">Perfil:</label>
                                <div>
                                    <img src="{{ asset('assets/images/perfils/vazio.png') }}" id="perfil_cadastro" class="border border-3 border-light rounded-circle">
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

                        <div class="d-flex justify-content-center gap-3 text-center">
                            <button type="submit" class="cursor sombra botoes animate__animated animate__fadeIn btn {{ session("tema") == "escuro" ? "btn-light" : "btn-dark" }} {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} {{ session("tema") == "escuro" ? "focus-ring focus-ring-primary" : "focus-ring focus-ring-danger" }}"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-person-plus-fill"></i> Cadastrar</span></button>
                            <button type="button" class="cursor sombra botoes animate__animated animate__fadeIn btn {{ session("tema") == "escuro" ? "btn-light" : "btn-dark" }} {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} {{ session("tema") == "escuro" ? "focus-ring focus-ring-primary" : "focus-ring focus-ring-danger" }}" onclick="limparCampos()"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-x-circle-fill"></i> Limpar</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection