<audio id="trilha_sonora_normal" autoplay muted loop>
    <source src="{{ asset("assets/audios/trilha_sonora_normal.mp3") }}" type="audio/mpeg">
</audio>

<a href="{{ route("musicaNormal") }}" class="cursor sombra botoes btn btn-dark border border-danger rounded-circle ms-3 mb-2 px-3 py-2">
    <i class="cursor cor_fonte bi {{ session("musicaNormal") == "Desativado" ? "bi-volume-mute" : "bi-volume-up" }} fs-4"></i>
</a>