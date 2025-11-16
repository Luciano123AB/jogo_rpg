@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="d-flex">
            <div class="text-center">
                <img src="{{ asset("assets/images/personagens/" . (session("player.personagem.classe")) . ".png") }}" class="
                    @if(session("dano_recebido"))
                        animate__animated animate__shakeX
                    @else
                        animate__animated animate__slideInLeft
                    @endif
                w-50">
                <div class="d-grid gap-2 w-50 mx-auto">
                    <div class="barras progress border border-danger bg-black" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div id="hp" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 100%"><label class="fw-bold fs-6">❤️ {{ $batalha->hp }}</label></div>
                    </div>
                    
                    @if (session("dano_recebido"))
                        <small class="cor_fontes_claro fw-bold">🎯 -{{ session('dano_recebido') }}</small>
                    @endif
                    
                    <form action="{{ route("atacar") }}" method="POST" class="d-grid gap-2" novalidate>
                        @csrf

                        <div class="btn-group animate__animated animate__fadeIn" role="group" aria-label="SkillsPlayer">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" value="{{ session("player.personagem.skill01.skill") }}">
                            <label class="cursor d-grid btn {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-secondary btn-outline-primary" : "cor_fontes_claro bg-dark btn-outline-danger" }}" for="btnradio1">🕹 <span class="cursor">{{ session("player.personagem.skill01.skill") }}</span></label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" value="{{ session("player.personagem.skill02.skill") }}">
                            <label class="cursor d-grid btn {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-secondary btn-outline-primary" : "cor_fontes_claro bg-dark btn-outline-danger" }}" for="btnradio2">🕹 <span class="cursor">{{ session("player.personagem.skill02.skill") }}</span></label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" value="{{ session("player.personagem.skill03.skill") }}">
                            <label class="cursor d-grid btn {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-secondary btn-outline-primary" : "cor_fontes_claro bg-dark btn-outline-danger" }}" for="btnradio3">🕹 <span class="cursor">{{ session("player.personagem.skill03.skill") }}</span></label>
                        </div>
                        @error("skill")
                            <div class="alert alert-danger mb-0" role="alert">
                                <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                            </div>
                        @enderror

                        @if ($batalha->vez == 0)
                            <button id="atacar" class="cursor sombras botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} d-flex border" type="submit">
                                <span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }} mx-auto">ATACAR! 🤜🏼</span>
                            </button>
                        @endif
                    </form>
                </div>
            </div>

            <div class="d-grid text-center">
                <h1 class="animate__animated animate__fadeInDown my-auto">🆚</h1>
                <h2 id="alerta" class="animate__animated animate__pulse text-warning"></h2>
            </div>

            <div class="text-center">
                <img src="{{ asset("assets/images/personagens/$oponente->classe" . "_reverso.png") }}" class="
                    @if(session("dano_desferido"))
                        animate__animated animate__shakeX
                    @else
                        animate__animated animate__slideInRight
                    @endif
                w-50">
                <div class="d-grid gap-2 w-50 mx-auto">
                    <div class="barras progress border border-danger bg-black" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div id="hp_oponente" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 100%"><label class="fw-bold fs-6">❤️ {{ $batalha->hp_oponente }}</label></div>
                    </div>

                    @if (session("dano_desferido"))
                        <small class="cor_fontes_claro fw-bold">🎯 -{{ session('dano_desferido') }}</small>
                    @endif

                    <div class="btn-group animate__animated animate__fadeIn" role="group" aria-label="SkillsOponente">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" value="{{ $oponente->skill01->skill }}" disabled>
                        <label class="d-grid btn {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-secondary btn-outline-primary" : "cor_fontes_claro bg-dark btn-outline-danger" }}" for="btnradio4">🕹 <span>{{ $oponente->skill01->skill }}</span></label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off" value="{{ $oponente->skill02->skill }}" disabled>
                        <label class="d-grid btn {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-secondary btn-outline-primary" : "cor_fontes_claro bg-dark btn-outline-danger" }}" for="btnradio5">🕹 <span>{{ $oponente->skill02->skill }}</span></label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off" value="{{ $oponente->skill03->skill }}" disabled>
                        <label class="d-grid btn {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-secondary btn-outline-primary" : "cor_fontes_claro bg-dark btn-outline-danger" }}" for="btnradio6">🕹 <span>{{ $oponente->skill03->skill }}</span></label>
                    </div>

                    <div hidden>
                        <a href="{{ route("ataque") }}" id="ataque" class="cursor sombras botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} d-flex border" type="submit">
                            <span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }} mx-auto">🤛🏼 ATACAR!</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        const skill01 = document.getElementById("btnradio1");
        const skill02 = document.getElementById("btnradio2");
        const skill03 = document.getElementById("btnradio3");
        const atacar = document.getElementById("atacar");
        const atacar_oponente = document.getElementById("atacar_oponente");

        @if($batalha->vez == 1)
            skill01.disabled = true;
            skill02.disabled = true;
            skill03.disabled = true;
            setTimeout(() => {
                document.getElementById("ataque").click();
            }, 2000);
        @else
            skill01.disabled = false;
            skill02.disabled = false;
            skill03.disabled = false;
        @endif

        @if(session()->has("skill01"))
            skill01.disabled = true;
        @endif

        @if(session()->has("skill02"))
            skill02.disabled = true;
        @endif

        @if(session()->has("skill03"))
            skill03.disabled = true;
        @endif

        const hp_player = {{ $batalha->hp }};
        const hp_maximo_player = {{ session("dados.hp_maximo") }};
        const hp_barra_player = document.getElementById("hp");

        const hp_oponente = {{ $batalha->hp_oponente }};
        const hp_maximo_oponente = {{ session("dados.hp_oponente_maximo") }};
        const hp_barra_oponente = document.getElementById("hp_oponente");

        function calcularPorcentagem(atual, maximo) {
            return (atual / maximo) * 100;
        }

        hp_barra_player.style.width = calcularPorcentagem(hp_player, hp_maximo_player) + "%";
        hp_barra_oponente.style.width = calcularPorcentagem(hp_oponente, hp_maximo_oponente) + "%";

        const alerta = document.getElementById("alerta");

        if (calcularPorcentagem(hp_player, hp_maximo_player) <= 10 || calcularPorcentagem(hp_oponente, hp_maximo_oponente) <= 10) {
            alerta.textContent = "Momento Decisívo!";
        }
    </script>
@endsection