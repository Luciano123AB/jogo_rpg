@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="{{ session("tema") == "escuro" ? "fundos_card_claro" : "fundos_card_escuro" }} card p-3">
            <div class="d-grid gap-3 w-100">
                <div class="d-flex gap-3">
                    <div class="cards w-50">
                        <div class="sombras card animate__animated animate__fadeInLeft {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }} p-3">
                            <div class="d-grid text-center">
                                <div class="d-flex justify-content-center mb-2">
                                    <span class="animate__animated animate__tada animate__infinite fs-4 me-1">🏆</span>
                                    <h4 class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }}">Player com Mais Vitórias</h4>
                                </div>
                                <label class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">Usuário:
                                    @php
                                    
                                        $perfil = asset("assets/images/perfils/" . $player_lider_vitorias->personagem->classe . "_perfil.png");

                                        if ($player_lider_vitorias->foto != "...") {
                                            $perfil = "data:image/png;data:image/jpeg;base64," . $player_lider_vitorias->foto;
                                        }
                                    @endphp
                                    <img src="{{ $perfil }}" class="cursor sombras perfil_players border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded-circle">
                                    {{ $player_lider_vitorias->usuario }}
                                </label>
                                <label class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">Qtd/Vitórias: {{ $player_lider_vitorias->quantidade_vitorias }}</label>
                            </div>
                        </div>
                    </div>

                    <div class="cards w-50">
                        <div class="sombras d-flex card animate__animated animate__fadeInRight {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }} p-3">
                            <div class="d-grid text-center">
                                <div class="d-flex justify-content-center mb-2">
                                    <span class="animate__animated animate__tada animate__infinite fs-4 me-1">🏆</span>
                                    <h4 class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro" : "titulos_claro cor_fontes_claro" }}">Player com Maior Nível</h4>
                                </div>
                                <label class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">Usuário:
                                    @php
                                    
                                        $perfil = asset("assets/images/perfils/" . $player_lider_nivel->personagem->classe . "_perfil.png");

                                        if ($player_lider_nivel->foto != "...") {
                                            $perfil = "data:image/png;data:image/jpeg;base64," . $player_lider_nivel->foto;
                                        }
                                    @endphp
                                    <img src="{{ $perfil }}" class="cursor sombras perfil_players border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded-circle">
                                    {{ $player_lider_nivel->usuario }}
                                </label>
                                <label class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">Nível: {{ $player_lider_nivel->nivel }}</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sombras card animate__animated animate__fadeInUp {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }} p-3 overflow-x-auto">
                    <div class="tabela-scroll">
                        <table class="border border-2 {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} w-100">
                            <thead class="text-center">
                                <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5 px-1"><i class="bi bi-list-ol"></i>Nº</th>
                                <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5"><i class="bi bi-person-bounding-box"></i>Perfil</th>
                                <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5"><i class="bi bi-person-fill"></i>Usuario</th>
                                <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5"><i class="bi bi-person-arms-up"></i>Classe</th>
                                <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5 px-1"><i class="bi bi-arrow-up-circle-fill"></i>Nível</th>
                                <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5 px-1"><i class="bi bi-123"></i>Qtd/Vitórias</th>
                                <th class="{{ session("tema") == "escuro" ? "titulos_escuro cor_fontes_escuro border-primary" : "titulos_claro cor_fontes_claro border-danger" }} border fs-5 px-1"><i class="bi bi-123"></i>Qtd/Derrotas</th>
                                <th class="{{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} border fs-5">⚔️</th>
                            </thead>

                            <tbody>
                                @forelse ($players as $player)
                                    <tr>
                                        <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center fw-bold">{{ $loop->index + 1 }}</td>
                                        <td class="{{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} border text-center px-1">
                                            <img src="
                                                @if ($player->foto == "...")
                                                    {{ asset("assets/images/perfils/" . $player->personagem->classe . "_perfil.png") }}
                                                @else
                                                    data:image/png;data:image/jpeg;base64,{{ $player->foto }}
                                                @endif
                                            " id="perfil_player" class="cursor sombras border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded-circle">
                                        </td>
                                        <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border px-1">
                                            @if($player->genero == "Masculino")
                                                ♂️
                                            @elseif($player->genero == "Feminino")
                                                ♀️
                                            @else
                                                ⚧
                                            @endif
                                            {{ $player->usuario }}
                                        </td>
                                        <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border px-1">{{ $player->personagem->classe }}</td>
                                        <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center">{{ $player->nivel }}</td>
                                        <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center">{{ $player->quantidade_vitorias }}</td>
                                        <td class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center">{{ $player->quantidade_derrotas }}</td>
                                        <td id="desafiar" class="{{ session("tema") == "escuro" ? "cor_fontes_escuro border-primary" : "cor_fontes_claro border-danger" }} border text-center">
                                            @if($player->id != session("player.id"))
                                                <a href="{{ route("confirmarDesafio", ["player" => $player->id, "oponente" => $player->personagem->id, "nome_oponente" => $player->usuario, "nivel" => $player->nivel]) }}" type="button" class="cursor sombras botoes btn btn-sm {{ session("tema") == "escuro" ? "btn-light border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} mx-1"><span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">🤜🏼Desafiar</span></button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td colspan="8" class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}">NENHUM PLAYER EXISTENTE AINDA</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection