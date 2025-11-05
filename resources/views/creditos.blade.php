@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="fundo_card card p-3">
            <div class="d-grid gap-3 w-100">
                <div id="card_creditos" class="card bg-dark p-3">
                    <div>
                        <h3 class="titulo cor_fonte"><i class="bi bi-arrow-right"></i>Nome do jogo e introdução inicial:</h3>
                        <ul>
                            <li class="cor_fonte"><img src="{{ asset("assets/images/icone.png") }}" id="icone_creditos"> Projeto: Jogo RPG</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="titulo cor_fonte"><i class="bi bi-arrow-right"></i>Equipe principal do desenvolvimento:</h3>
                        <ul>
                            <li class="cor_fonte">Direção: Luciano Eduardo Stefanello da Silva</li>
                            <li class="cor_fonte">Design: Luciano Eduardo Stefanello da Silva</li>
                            <li class="cor_fonte">Arte: Luciano Eduardo Stefanello da Silva</li>
                            <li class="cor_fonte">Som: Luciano Eduardo Stefanello da Silva</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="titulo cor_fonte"><i class="bi bi-arrow-right"></i>Equipe de produtores e líderes:</h3>
                        <ul>
                            <li class="cor_fonte">Luciano Eduardo Stefanello da Silva</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="titulo cor_fonte"><i class="bi bi-arrow-right"></i>Equipe de apoio e colaboradores:</h3>
                        <ul>
                            <li class="cor_fonte">Testadores: Luciano Eduardo Stefanello da Silva</li>
                            <li class="cor_fonte">Animadores: Luciano Eduardo Stefanello da Silva</li>
                            <li class="cor_fonte">Designers adicionais: Nenhum</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="titulo cor_fonte"><i class="bi bi-arrow-right"></i>Música e áudio:</h3>
                        <ul>
                            <li class="cor_fonte">Compositores: Nenhum</li>
                            <li class="cor_fonte">Dubladores: Nenhum</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="titulo cor_fonte"><i class="bi bi-arrow-right"></i>Suporte técnico e colaboradores externos:</h3>
                        <ul>
                            <li class="cor_fonte">Luciano Eduardo Stefanello da Silva</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="titulo cor_fonte"><i class="bi bi-arrow-right"></i>Agradecimentos especiais:</h3>
                        <ul>
                            <li class="cor_fonte">Pessoas: Nenhum</li>
                            <li class="cor_fonte">Comunidades: Nenhum</li>
                            <li class="cor_fonte">Parceiros: Nenhum</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="titulo cor_fonte"><i class="bi bi-arrow-right"></i>Lista das empresas e estúdios envolvidos:</h3>
                        <ul>
                            <li class="cor_fonte">Nenhum</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection