@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="{{ session("tema") == "escuro" ? "fundo_card_claro" : "fundo_card_escuro" }} card p-3">
            <div class="d-grid gap-3 w-100">
                <div class="d-flex gap-3">
                    <div class="sombra card {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }} w-50 p-3">
                        <div class="d-grid text-center">
                            <h4 class="{{ session("tema") == "escuro" ? "titulo_escuro cor_fonte_escuro" : "titulo_claro cor_fonte_claro" }}">Player com Mais Vitórias</h4>
                            <label class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">{{ $player_lider_vitorias->usuario }}</label>
                            <label class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">Qtd/Vitórias: {{ $player_lider_vitorias->quantidade_vitorias }}</label>
                        </div>
                    </div>

                    <div class="sombra d-flex card {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }} w-50 p-3">
                        <div class="d-grid text-center">
                            <h4 class="{{ session("tema") == "escuro" ? "titulo_escuro cor_fonte_escuro" : "titulo_claro cor_fonte_claro" }}">Player com Maior Nível</h4>
                            <label class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">{{ $player_lider_vitorias->usuario }}</label>
                            <label class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">Nível: {{ $player_lider_vitorias->nivel }}</label>
                        </div>
                    </div>
                </div>

                <div class="sombra card {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }} p-3">
                    <table>
                        <thead>
                            <th class="{{ session("tema") == "escuro" ? "titulo_escuro cor_fonte_escuro" : "titulo_claro cor_fonte_claro" }}">Nº</th>
                            <th class="{{ session("tema") == "escuro" ? "titulo_escuro cor_fonte_escuro" : "titulo_claro cor_fonte_claro" }}">Usuario</th>
                            <th class="{{ session("tema") == "escuro" ? "titulo_escuro cor_fonte_escuro" : "titulo_claro cor_fonte_claro" }}">Classe</th>
                            <th class="{{ session("tema") == "escuro" ? "titulo_escuro cor_fonte_escuro" : "titulo_claro cor_fonte_claro" }}">Nível</th>
                            <th class="{{ session("tema") == "escuro" ? "titulo_escuro cor_fonte_escuro" : "titulo_claro cor_fonte_claro" }}">Qtd/Vitórias</th>
                            <th class="{{ session("tema") == "escuro" ? "titulo_escuro cor_fonte_escuro" : "titulo_claro cor_fonte_claro" }}">Qtd/Derrotas</th>
                        </thead>

                        <tbody>
                            @foreach ($players as $player)
                                <tr>
                                    <td class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">{{ $loop->index + 1 }}</td>
                                    <td class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">{{ $player->usuario }}</td>
                                    <td class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">{{ $player->personagem->classe }}</td>
                                    <td class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">{{ $player->nivel }}</td>
                                    <td class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">{{ $player->quantidade_vitorias }}</td>
                                    <td class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">{{ $player->quantidade_derrotas }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection