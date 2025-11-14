@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="{{ session("tema") == "escuro" ? "fundo_card_claro" : "fundo_card_escuro" }} card p-3">
            <div class="d-flex gap-3">
                
            </div>
        </div>
    </div>
@endsection