@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="{{ session("tema") == "escuro" ? "fundo_card_claro" : "fundo_card_escuro" }} card p-3">
            <div class="animate__animated animate__fadeInLeft card-group gap-3 w-100">
                <div class="cards sombra card {{ session("tema") == "escuro" ? "bg-secondary border-start border-primary" : "bg-dark border-start border-danger" }} rounded">
                        
                </div>
            </div>
        </div>
    </div>
@endsection