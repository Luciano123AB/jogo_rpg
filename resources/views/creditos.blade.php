@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <div class="{{ session("tema") == "escuro" ? "fundo_card_claro" : "fundo_card_escuro" }} card p-3">
            <div class="d-grid gap-3 w-100">
                <div class="sombra card {{ session("tema") == "escuro" ? "bg-secondary" : "bg-dark" }} p-3">
                    <div>
                        <h3 class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp"><i class="bi bi-arrow-right"></i>Nome do jogo e introdução inicial:</h3>
                        <ul>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp"><img src="{{ asset("assets/images/icone.png") }}" id="icone_creditos"> Projeto: Jogo RPG</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp"><i class="bi bi-arrow-right"></i>Equipe principal do desenvolvimento:</h3>
                        <ul>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Direção: Luciano Eduardo Stefanello da Silva</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Design: Luciano Eduardo Stefanello da Silva</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Arte: Luciano Eduardo Stefanello da Silva</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Som: Luciano Eduardo Stefanello da Silva</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp"><i class="bi bi-arrow-right"></i>Equipe de produtores e líderes:</h3>
                        <ul>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Luciano Eduardo Stefanello da Silva</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp"><i class="bi bi-arrow-right"></i>Equipe de apoio e colaboradores:</h3>
                        <ul>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Testadores: Luciano Eduardo Stefanello da Silva</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Animadores: Luciano Eduardo Stefanello da Silva</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Designers adicionais: Nenhum</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp"><i class="bi bi-arrow-right"></i>Música e áudio:</h3>
                        <ul>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Compositores: Nenhum</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Dubladores: Nenhum</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp"><i class="bi bi-arrow-right"></i>Suporte técnico e colaboradores externos:</h3>
                        <ul>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Luciano Eduardo Stefanello da Silva</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp"><i class="bi bi-arrow-right"></i>Agradecimentos especiais:</h3>
                        <ul>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Pessoas: Nenhum</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Comunidades: Nenhum</li>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Parceiros: Nenhum</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="{{ session("tema") == "escuro" ? "titulo_escuro" : "titulo_claro" }} {{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp"><i class="bi bi-arrow-right"></i>Lista das empresas e estúdios envolvidos:</h3>
                        <ul>
                            <li class="{{ session("tema") == "escuro" ? "cor_fonte_escuro" : "cor_fonte_claro" }} animate__animated animate__fadeInUp">Nenhum</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection