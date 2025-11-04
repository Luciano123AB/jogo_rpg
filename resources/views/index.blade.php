@extends("layouts.main_layout")

@section("content")
    <div class="container text-center w-50">
        <div id="card" class="card d-grid gap-3 p-3">
            <button class="botoes btn btn-lg btn-dark border border-3 border-danger focus-ring focus-ring-danger"><span class="cor_fonte"><img src="https://www.svgrepo.com/show/276071/sword.svg" id="icone_batalhar"> Batalhar!</span></button>
            <button class="botoes btn btn-lg btn-dark border border-3 border-danger focus-ring focus-ring-danger"><span class="cor_fonte"><i class="bi bi-question-circle"></i> Como Jogar?/Regras</span></button>
            <a href="{{ route("sobre") }}" class="botoes btn btn-lg btn-dark border border-3 border-danger focus-ring focus-ring-danger"><span class="cor_fonte"><i class="bi bi-person-lines-fill"></i> Sobre as Classes</span></a>
            <button class="botoes btn btn-lg btn-dark border border-3 border-danger focus-ring focus-ring-danger"><span class="cor_fonte"><i class="bi bi-body-text"></i> Créditos</span></button>
        </div>
    </div>
@endsection