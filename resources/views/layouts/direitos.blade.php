@if($pagina == "Home" || $pagina == "Batalha")
    <footer class="animate__animated animate__fadeInUp position-absolute bottom-0 start-50 translate-middle-x {{ session("tema") == "escuro" ? "bg-light border-primary" : "bg-black border-danger" }} rounded-2 border text-center shadow mb-5">
        <img src="{{ asset("assets/images/proprietario.png") }}" style="width: 35px; height: 35px;" class="border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded-start-2">
        <small class="text-white">
            <span class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}"> © {{ date("Y") }} Jogo RPG - 
                <span id="direitos" class="me-1">TODOS OS DIREITOS RESERVADOS: Luciano Eduardo Stefanello da Silva</span>
            </span>
        </small>
    </footer>
@else
    <footer class="animate__animated animate__fadeInUp mx-3 mt-5 mb-3">
        <div class="{{ session("tema") == "escuro" ? "bg-light border-primary" : "bg-black border-danger" }} rounded-2 border text-center shadow mx-auto" style="max-width: 619px;">
            <img src="{{ asset('assets/images/proprietario.png') }}" style="width: 35px; height: 35px;" class="border {{ session("tema") == "escuro" ? "border-primary" : "border-danger" }} rounded-start-2">
            <small class="text-white">
                <span class="{{ session("tema") == "escuro" ? "cor_fontes_escuro" : "cor_fontes_claro" }}"> © {{ date('Y') }} Jogo RPG - 
                    <span id="direitos" class="me-1">TODOS OS DIREITOS RESERVADOS: Luciano Eduardo Stefanello da Silva</span>
                </span>
            </small>
        </div>
    </footer>
@endif