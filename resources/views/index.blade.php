@extends("layouts.main_layout")

@section("content")
    <div class="container text-center w-50">
        <div class="fundo_card card d-grid gap-3 p-3">
            <button class="cursor botoes btn btn-lg btn-dark border border-3 border-danger focus-ring focus-ring-danger"><span class="cursor cor_fonte"><img src="https://www.svgrepo.com/show/276071/sword.svg" id="icone_batalhar"> Batalhar!</span></button>
            <button class="cursor botoes btn btn-lg btn-dark border border-3 border-danger focus-ring focus-ring-danger"><span class="cursor cor_fonte"><i class="bi bi-question-circle"></i> Como Jogar?/Regras</span></button>
            <a href="{{ route("sobre") }}" class="cursor botoes btn btn-lg btn-dark border border-3 border-danger focus-ring focus-ring-danger"><span class="cursor cor_fonte"><i class="bi bi-person-lines-fill"></i> Sobre as Classes</span></a>
            <a href="{{ route("creditos") }}" class="cursor botoes btn btn-lg btn-dark border border-3 border-danger focus-ring focus-ring-danger"><span class="cursor cor_fonte"><i class="bi bi-body-text"></i> Créditos</span></a>
        </div>
    </div>
@endsection