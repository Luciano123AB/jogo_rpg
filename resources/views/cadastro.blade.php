@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="{{ session("tema") == "escuro" ? "fundo_card_claro" : "fundo_card_escuro" }} card p-3">
            <div class="d-grid gap-3 w-100">
                <div class="sombra card {{ session("tema") == "escuro" ? "bg-secondary" : "bg-black" }} {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} p-3">
                    <form action="{{ route("cadastrar") }}" method="post" novalidate>
                        @csrf

                        <label for="exampleInputEmail1" class="form-label {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">Usuário:</label>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" id="usuario" class="form-control" name="usuario" placeholder="Username123" aria-label="Username123" aria-describedby="basic-addon1" value="{{ old("usuario") }}">
                            </div>
                            @error("usuario")
                                <div class="alert alert-danger mt-1 mb-0" role="alert">
                                    <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <label for="exampleInputEmail1" class="form-label {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">Senha:</label>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">***</span>
                                <input type="text" id="senha" class="form-control" name="senha" placeholder="..." aria-label=".." aria-describedby="basic-addon1" value="{{ old("senha") }}">
                            </div>
                            @error("senha")
                                <div class="alert alert-danger mt-1 mb-0" role="alert">
                                    <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <label for="exampleInputEmail1" class="form-label {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">Classe:</label>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-sort-down"></i></span>
                                <select id="classe" class="form-select" name="classe" aria-label="Default select example">
                                    <option selected>Selecione sua classe...</option>
                                    @foreach ($personagens as $personagem)
                                        <option value="{{ $personagem->classe }}" {{ old("classe") == "$personagem->classe" ? "selected" : "" }}>{{ $personagem->classe }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error("classe")
                                <div class="alert alert-danger mt-1 mb-0" role="alert">
                                    <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="cursor sombra botoes btn {{ session("tema") == "escuro" ? "btn-light" : "btn-dark" }} {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} me-2"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-person-plus"></i> Cadastrar</span></button>
                            <button type="button" class="cursor sombra botoes btn {{ session("tema") == "escuro" ? "btn-light" : "btn-dark" }} {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }}" onclick="limparCampos()"><span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}"><i class="cursor bi bi-x-circle"></i> Limpar</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection