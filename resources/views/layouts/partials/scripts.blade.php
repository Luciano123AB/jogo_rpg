<script>
    document.addEventListener("click", function(e){
        if(e.target && e.target.id === "ok"){
            Swal.close();
        }
    });

    const audio = document.getElementById("trilha_sonora");

    @if(session("musica") === "Desativado")
        audio.muted = true;
    @else
        audio.muted = false;
        audio.play().catch(error => {
            console.error("Erro ao reproduzir o áudio:", error);
        });
    @endif

    function limparCampos() {
        document.getElementById("usuario").value = "";
        document.getElementById("senha").value = "";

        var classe = document.getElementById("classe");

        if (classe) {
            classe.selectedIndex = 0;
        }        
    }
</script>