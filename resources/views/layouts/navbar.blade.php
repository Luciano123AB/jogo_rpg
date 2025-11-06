<nav id="navbar" class="navbar navbar-expand-lg bg-black border-5 border-danger rounded-bottom-5 mb-5">
    <div class="container-fluid">
        <a href="{{ route("home") }}" id="home" class="cursor navbar-brand">
            <img src="{{ asset("assets/images/icone.png") }}" id="icone" class="cursor">
            <span class="cursor titulo cor_fonte fw-bold align-middle fs-3">Projeto: Jogo RPG</span>
            <span class="cursor cor_fonte align-middle fs-3">- {{ $pagina }}</span>
        </a>

        @if($pagina != "Home")
            <a href="{{ route("home") }}" class="cursor botoes btn btn-lg btn-dark d-flex border border-danger focus-ring focus-ring-danger">
                <span class="cursor cor_fonte"><i class="cursor bi bi-arrow-90deg-left"></i> Voltar</span>
            </a>
        @endif

        <div class="d-flex gap-3 my-1">
            <button class="cursor botoes btn btn-lg btn-dark d-flex border border-danger focus-ring focus-ring-danger">
                <span class="cursor cor_fonte"><i class="cursor bi bi-person-add"></i> Cadastrar</span>
            </button>
                
            <button class="cursor botoes btn btn-lg btn-dark d-flex border border-danger focus-ring focus-ring-danger">
                <span class="cursor cor_fonte"><i class="cursor bi bi-box-arrow-in-right"></i> Logar</span>
            </button>
        </div>
    </div>
</nav>