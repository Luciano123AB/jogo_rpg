@if($pagina == "Home")
    <footer class="position-absolute bottom-0 start-50 translate-middle-x bg-dark rounded-2 border border-danger text-center shadow mb-5">
        <img src="{{ asset("assets/images/proprietario.png") }}" style="width: 35px; height: 35px;" class="border border-danger rounded-start-2">
        <small class="text-white">
            <span class="cor_fonte"> © {{ date("Y") }} Jogo RPG - 
                <span id="direitos" class="me-1">TODOS OS DIREITOS RESERVADOS: Luciano Eduardo Stefanello da Silva</span>
            </span>
        </small>
    </footer>
@else
    <footer class="mx-3 mt-5 mb-3">
        <div class="bg-dark rounded-2 border border-danger text-center shadow mx-auto" style="max-width: 619px;">
            <img src="{{ asset('assets/images/proprietario.png') }}" style="width: 35px; height: 35px;" class="border border-danger rounded-start-2">
            <small class="text-white">
                <span class="cor_fonte"> © {{ date('Y') }} Jogo RPG - 
                    <span id="direitos" class="me-1">TODOS OS DIREITOS RESERVADOS: Luciano Eduardo Stefanello da Silva</span>
                </span>
            </small>
        </div>
    </footer>
@endif