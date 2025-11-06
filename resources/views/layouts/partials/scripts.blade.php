<script>
    document.addEventListener("click", function(e){
        if(e.target && e.target.id === "ok"){
            Swal.close();
        }
    });

    const audio = document.getElementById("trilha_sonora_normal");

    @if(session("musicaNormal") === "Desativado")
        audio.muted = true;
    @else
        audio.muted = false;
        audio.play().catch(error => {
            console.error("Erro ao reproduzir o áudio:", error);
        });
    @endif
</script>