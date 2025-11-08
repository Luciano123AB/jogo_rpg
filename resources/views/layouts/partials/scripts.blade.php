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

    document.addEventListener("change", function(e) {
        if (e.target && e.target.id === "classe") {

            const perfil = document.getElementById("perfil_cadastro");
            const classeSelecionada = e.target.value;
            const basePath = "{{ asset('assets/images/perfils') }}/";

            perfil.classList.remove("border-secondary", "border-danger", "border-primary", "border-dark");
            perfil.classList.remove("bg-danger", "bg-primary", "bg-dark");

            switch (classeSelecionada) {
                case "Guerreiro":
                    perfil.src = basePath + "guerreiro_perfil.png";
                    perfil.classList.add("bg-danger", "border-danger");
                break;

                case "Mago":
                    perfil.src = basePath + "mago_perfil.png";
                    perfil.classList.add("bg-primary", "border-primary");
                break;

                case "Assassino":
                    perfil.src = basePath + "assassino_perfil.png";
                    perfil.classList.add("bg-dark", "border-dark");
                break;

                default:
                    perfil.src = basePath + "vazio.png";
                    perfil.classList.add("border-secondary");
                break;
            }
        }
    });
</script>