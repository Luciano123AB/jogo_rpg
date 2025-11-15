@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="{{ session("tema") == "escuro" ? "fundos_card_claro" : "fundos_card_escuro" }} card p-3">
            <div class="d-grid gap-3 w-100">
                <div class="d-flex gap-3">
                    <div class="sombras card animate__animated animate__fadeInLeft {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }} w-50 p-3">
                        <div class="d-grid text-center">
                            <div class="d-flex justify-content-center mb-2">
                                <span class="fs-4 me-1">👑</span>
                                <h4 class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }}">Player com Mais Vitórias</h4>
                            </div>
                            <label class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">Usuário: {{ $player_lider_vitorias->usuario }}</label>
                            <label class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">Qtd/Vitórias: {{ $player_lider_vitorias->quantidade_vitorias }}</label>
                        </div>
                    </div>

                    <div class="sombras d-flex card animate__animated animate__fadeInRight {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }} w-50 p-3">
                        <div class="d-grid text-center">
                            <div class="d-flex justify-content-center mb-2">
                                <span class="fs-4 me-1">👑</span>
                                <h4 class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }}">Player com Maior Nível</h4>
                            </div>
                            <label class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">Usuário: {{ $player_lider_vitorias->usuario }}</label>
                            <label class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">Nível: {{ $player_lider_vitorias->nivel }}</label>
                        </div>
                    </div>
                </div>

                <div class="sombras card animate__animated animate__fadeInUp {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }} p-3 overflow-x-auto">
                    <table>
                        <thead class="text-center">
                            <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5 px-1"><i class="bi bi-list-ol"></i>Nº</th>
                            <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5"><i class="bi bi-person-fill"></i>Usuario</th>
                            <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5"><i class="bi bi-person-arms-up"></i>Classe</th>
                            <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5 px-1"><i class="bi bi-arrow-up-circle-fill"></i>Nível</th>
                            <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5 px-1"><i class="bi bi-123"></i>Qtd/Vitórias</th>
                            <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5 px-1"><i class="bi bi-123"></i>Qtd/Derrotas</th>
                        </thead>

                        <tbody>
                            @forelse ($players as $player)
                                <tr>
                                    <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center">{{ $loop->index + 1 }}</td>
                                    <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border px-1">{{ $player->usuario }}</td>
                                    <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border px-1">{{ $player->personagem->classe }}</td>
                                    <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center">{{ $player->nivel }}</td>
                                    <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center">{{ $player->quantidade_vitorias }}</td>
                                    <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center">{{ $player->quantidade_derrotas }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">NENHUM PLAYER EXISTENTE AINDA</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection