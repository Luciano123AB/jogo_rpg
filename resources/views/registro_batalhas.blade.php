@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="{{ session("tema") == "escuro" ? "fundos_card_claro" : "fundos_card_escuro" }} card p-3">
            <div class="d-flex gap-3">
                <div class="cards w-50">
                    <div class="sombras card animate__animated animate__backInLeft {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }} p-3">
                        <h4 class="{{ session("tema") == "escuro" ? "cor_fontes_escuro titulos_escuro" : "cor_fontes_claro titulos_claro" }}">-Vitórias:</h4>
                        <div class="tabela-scroll">
                            <table class="border border-2 {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} w-100">
                                <thead class="text-center">
                                    <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border"><i class="bi bi-list-ol"></i>Nº</th>
                                    <th class="{{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} border">👑</th>
                                    <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border">Você</th>
                                    <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border">VS</th>
                                    <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border">Oponente</th>
                                    <th class="{{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} border">⚰️</th>
                                </thead>

                                <tbody>
                                    @forelse ($batalhas_vitorias as $vitorias)
                                        <tr>
                                            <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center fw-bold">{{ $loop->index + 1 }}</td>
                                            <td class="{{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} border text-success text-center fw-bold">VITÓRIA</td>
                                            <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center">{{ $vitorias->ganhou }}</td>
                                            <td class="{{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} border text-center">🆚</td>
                                            <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center">{{ $vitorias->perdeu }}</td>
                                            <td class="{{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} border text-danger text-center fw-bold">DERROTA</td>
                                        </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="6" class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">NENHUMA VITÓRIA EXISTENTE AINDA</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="cards w-50">
                    <div class="sombras card animate__animated animate__backInRight {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }} p-3">
                        <h4 class="{{ session("tema") == "escuro" ? "cor_fontes_escuro titulos_escuro" : "cor_fontes_claro titulos_claro" }}">-Derrotas:</h4>
                        <div class="tabela-scroll">
                            <table class="border border-2 {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} w-100">
                                <thead class="text-center">
                                    <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border"><i class="bi bi-list-ol"></i>Nº</th>
                                    <th class="{{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} border">⚰️</th>
                                    <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border">Você</th>
                                    <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border">VS</th>
                                    <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border">Oponente</th>
                                    <th class="{{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} border">👑</th>
                                </thead>

                                <tbody>
                                    @forelse ($batalhas_derrotas as $derrotas)
                                        <tr>
                                            <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center fw-bold">{{ $loop->index + 1 }}</td>
                                            <td class="{{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} border text-danger text-center fw-bold">DERROTA</td>
                                            <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center">{{ $derrotas->perdeu }}</td>
                                            <td class="{{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} border text-center">🆚</td>
                                            <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center">{{ $derrotas->ganhou }}</td>
                                            <td class="{{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} border text-success text-center fw-bold">VITÓRIA</td>
                                        </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="6" class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">NENHUMA DERROTA EXISTENTE AINDA</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection