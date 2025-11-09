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

    const fundo = document.getElementById("fundo");

    document.addEventListener("mousemove", (e) => {

        const x = (e.clientX / window.innerWidth - 0.5) * 40;
        const y = (e.clientY / window.innerHeight - 0.5) * 40;

        fundo.style.transform = `translate(${x}px, ${y}px) scale(1.05)`;
    });

    document.addEventListener("click", function(e) {
        if (e.target && (e.target.id === "mostrar" || e.target.closest("#mostrar"))) {

            const senha = document.getElementById("senha");
            const botao = document.getElementById("mostrar");
            const olho = botao.querySelector("i");

            if (senha.type === "password") {
                senha.type = "text";
                olho.classList.remove("bi-eye-slash-fill");
                olho.classList.add("bi-eye-fill");
            } else {
                senha.type = "password";
                olho.classList.remove("bi-eye-fill");
                olho.classList.add("bi-eye-slash-fill");
            }
        }
    });

    document.addEventListener("change", function(e) {
        if (e.target && e.target.id === "classe") {

            const perfil = document.getElementById("perfil_cadastro");
            const classeSelecionada = e.target.value;
            const basePath = "{{ asset('assets/images/perfils') }}/";

            perfil.classList.remove("border-light", "border-danger", "border-primary", "border-dark");
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
                    perfil.classList.add("border-light");
                break;
            }
        }
    });
</script>