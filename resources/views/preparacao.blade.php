@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="{{ session("tema") == "escuro" ? "fundo_card_claro" : "fundo_card_escuro" }} card p-3">
            <div class="d-flex gap-3">
                <div class="animate__animated animate__fadeInLeft w-75">
                    <h1 class="cursor {{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} text-center fw-bold">Seu Personagem:</h1>
                    <div class="cards sombra card {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }}">
                        <h5 class="{{ session("tema") == "escuro" ? "cor_nivel" : "text-danger" }} text-center mt-2">Nível: {{ $nivel }}</h5>
                        <img src="{{ asset("assets/images/personagens/$classe.png") }}" class="card-img-top border-bottom {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }}">
                    </div>
                </div>

                <div class="animate__animated animate__fadeInRight w-25">
                    <h1 class="cursor {{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} text-center fw-bold">Oponentes:</h1>
                    <form action="{{ route("confirmarBatalha") }}" class="d-grid gap-3">
                        @foreach ($personagens as $personagem)
                            <div class="cards sombra card {{ session("tema") == "escuro" ? "bg-secondary border-primary" : "bg-dark border-danger" }}">
                                <div class="card-header text-center border-bottom {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }}">
                                    <h4 class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} card-title">
                                        @if($personagem->classe == "Guerreiro")
                                            🛡️
                                        @elseif($personagem->classe == "Mago")
                                            🔮
                                        @else
                                            🗡️
                                        @endif
                                        <span class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }}">{{ $personagem->classe }}</span>
                                    </h4>
                                    <label class="{{ session("tema") == "escuro" ? "cor_nivel" : "text-danger" }}">Nível: {{ $nivel }}</label>
                                </div>
                                
                                <img src="{{ asset("assets/images/personagens/$personagem->classe.png") }}" class="card-img-top border-bottom {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }}">

                                <div class="form-check d-flex justify-content-center">
                                    <input class="form-check-input cursor {{ session("tema") == "escuro" ? "border-primary focus-ring focus-ring-primary" : "border-danger focus-ring focus-ring-danger" }} my-2 me-1" type="radio" name="oponente" value="{{ $personagem->id }}" id="oponente{{ $loop->index + 1 }}">
                                    <label class="form-check-label" for="oponente{{ $loop->index + 1 }}">
                                        <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} align-middle">SELECIONAR</span>
                                    </label>
                                </div>
                            </div>
                        @endforeach

                        <div>
                            @error("oponente")
                                <div class="d-flex justify-content-center">
                                    <div class="alert alert-danger text-center" role="alert">
                                        <i class="bi bi-info-circle-fill me-3"></i>{{ $message }}
                                    </div>
                                </div>
                            @enderror
    
                            <button type="submit" class="cursor sombra botoes animate__animated animate__fadeIn btn {{ session("tema") == "escuro" ? "btn-light border-primary focus-ring focus-ring-primary" : "btn-dark border-danger focus-ring focus-ring-danger" }} w-100">
                                <span class="cursor {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }}">Batalhar!</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
    </div>
@endsection