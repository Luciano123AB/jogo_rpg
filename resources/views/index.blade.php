@extends("layouts.main_layout")

@section("content")
    @include("layouts.navbar")

    <div class="container text-center w-50">
        <div class="d-grid gap-3">
            <button class="btn btn-lg btn-dark border border-3 border-danger">Batalhar</button>
            <button class="btn btn-lg btn-dark border border-3 border-danger">Regras</button>
            <button class="btn btn-lg btn-dark border border-3 border-danger">Sobre</button>
        </div>
    </div>
    
    @include("layouts.direitos")
@endsection
