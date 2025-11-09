@php

    $musica = "";

    if ($pagina != "preparacao" || $pagina != "batalha") {

        $musica = "trilha_sonora_normal.mp3";

    } else {

        $musica = "trilha_sonora_batalha.mp3";

    }
@endphp

<audio id="trilha_sonora" autoplay muted loop>
    <source src="{{ asset("assets/audios/$musica") }}" type="audio/mpeg">
</audio>

<div class="d-flex justify-content-between mb-2">
    <a href="{{ route("musica") }}" class="cursor sombra botoes animate__animated animate__fadeInDown btn {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded-circle ms-3 px-3 py-2">
        <i class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} bi {{ session("musica") == "Desativado" ? "bi-volume-mute-fill" : "bi-volume-up-fill" }} fs-4"></i>
    </a>
    
    <a href="{{ route("tema") }}" class="cursor sombra botoes animate__animated animate__fadeInDown btn {{ session("tema") == "escuro" ? "btn-secondary" : "btn-dark" }} border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded-circle me-3 px-3 py-2">
        <i class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} bi {{ session("tema") == "escuro" ? "bi-brightness-high-fill" : "bi-moon-stars-fill" }} fs-4"></i>
    </a>
</div>