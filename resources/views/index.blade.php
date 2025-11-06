@extends("layouts.main_layout")

@section("content")
    <div class="container text-center w-50">
        <div id="card" class="card d-grid gap-3 p-3">
            <button class="cursor botoes btn btn-lg btn-dark border border-3 border-danger focus-ring focus-ring-danger"><span class="cursor cor_fonte"><img src="https://www.svgrepo.com/show/276071/sword.svg" id="icone_batalhar" class="cursor"> Batalhar!</span></button>
            <button class="cursor botoes btn btn-lg btn-dark border border-3 border-danger focus-ring focus-ring-danger"><span class="cursor cor_fonte"><i class="cursor bi bi-question-circle"></i> Como Jogar?/Regras</span></button>
            <button class="cursor botoes btn btn-lg btn-dark border border-3 border-danger focus-ring focus-ring-danger"><span class="cursor cor_fonte"><i class="cursor bi bi-person-lines-fill"></i> Sobre as Classes</span></button>
            <button class="cursor botoes btn btn-lg btn-dark border border-3 border-danger focus-ring focus-ring-danger"><span class="cursor cor_fonte"><i class="cursor bi bi-body-text"></i> Créditos</span></button>
        </div>
    </div>
@endsection