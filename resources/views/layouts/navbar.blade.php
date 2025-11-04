<nav id="navbar" class="navbar navbar-expand-lg bg-black border-5 border-danger rounded-bottom-5 mb-5">
    <div class="container-fluid">
        <a href="{{ route("home") }}" id="home" class="navbar-brand">
            <img src="{{ asset("assets/images/icone.png") }}" id="icone">
            <span class="titulo cor_fonte fw-bold align-middle fs-3">Projeto: Jogo RPG</span>
            <span class="cor_fonte align-middle fs-3">- {{ $pagina }}</span>
        </a>

        <div class="d-flex gap-3">
            <button class="botoes btn btn-lg btn-dark d-flex border border-danger focus-ring focus-ring-danger">
                <span class="cor_fonte"><i class="bi bi-person-add"></i> Cadastrar</span>
            </button>
                
            <button class="botoes btn btn-lg btn-dark d-flex border border-danger focus-ring focus-ring-danger">
                <span class="cor_fonte"><i class="bi bi-box-arrow-in-right"></i> Logar</span>
            </button>
        </div>
    </div>
</nav>