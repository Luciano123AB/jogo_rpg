@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="d-flex">
            <div class="animate__animated animate__fadeInLeft text-center">
                <img src="{{ asset("assets/images/personagens/" . (session("player.personagem.classe")) . ".png") }}" class="w-50">
                <div class="d-grid gap-2 w-50 mx-auto">
                    <div class="barras progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 100%"><label class="fw-bold fs-6">❤️ {{ session("player.personagem.hp") }}</label></div>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="cursor btn {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-secondary btn-outline-primary" : "cor_fontes_claro bg-dark btn-outline-danger" }}" for="btnradio1">{{ session("player.personagem.skill01.skill") }}</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="cursor btn {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-secondary btn-outline-primary" : "cor_fontes_claro bg-dark btn-outline-danger" }}" for="btnradio2">{{ session("player.personagem.skill02.skill") }}</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="cursor btn {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-secondary btn-outline-primary" : "cor_fontes_claro bg-dark btn-outline-danger" }}" for="btnradio3">{{ session("player.personagem.skill03.skill") }}</label>
                    </div>
                    <button class="cursor sombras botoes animate__animated animate__fadeIn btn btn-lg {{ session("tema") == "escuro" ? "btn-secondary border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} d-flex border">
                        <span class="cursor {{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }} mx-auto">🤜🏻 ATACAR!</span>
                    </button>
                </div>
            </div>

            <h1 class="animate__animated animate__fadeInDown my-auto">🆚</h1>

            <div class="animate__animated animate__fadeInRight text-center">
                <img src="{{ asset("assets/images/personagens/$oponente->classe" . "_reverso.png") }}" class="w-50">
                <div class="d-grid gap-2 w-50 mx-auto">
                    <div class="barras progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 100%"><label class="fw-bold fs-6">❤️ {{ $oponente->hp }}</label></div>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" disabled>
                        <label class="btn {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-secondary btn-outline-primary" : "cor_fontes_claro bg-dark btn-outline-danger" }}" for="btnradio4">{{ $oponente->skill01->skill }}</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" disabled>
                        <label class="btn {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-secondary btn-outline-primary" : "cor_fontes_claro bg-dark btn-outline-danger" }}" for="btnradio5">{{ $oponente->skill02->skill }}</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" disabled>
                        <label class="btn {{ session("tema") == "escuro" ? "cor_fontes_escuro bg-secondary btn-outline-primary" : "cor_fontes_claro bg-dark btn-outline-danger" }}" for="btnradio6">{{ $oponente->skill03->skill }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection