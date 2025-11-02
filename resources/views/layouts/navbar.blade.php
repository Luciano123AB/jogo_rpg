<nav id="navbar" class="navbar navbar-expand-lg bg-black border border-5 border-danger rounded-bottom-5 mb-5">
    <div class="container-fluid">
        <a href="{{ route("home") }}" class="navbar-brand">
            <img id="icone" src="{{ asset("assets/images/icone.png") }}">    
            <span class="text-white fs-3">Projeto: Jogo RPG</span>
        </a>

        <div class="d-flex gap-3">
            <button class="btn btn-lg btn-dark d-flex border">
                <span class="text-white">Cadastrar</span>
            </button>

            @if(!session("player"))
                <button class="btn btn-lg btn-dark d-flex border">
                    <span class="text-white">Logar</span>
                </button>
            @else
                <button class="btn btn-lg btn-dark d-flex border">
                    <span class="text-white">Player</span>
                </button>
            @endif
        </div>
    </div>
</nav>