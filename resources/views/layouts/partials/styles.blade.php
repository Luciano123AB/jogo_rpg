<style>
    * {
        cursor: url("/assets/images/cursores/cursor.png"), auto;
    }

    .cursor:hover {
        cursor: url("/assets/images/cursores/cursor_batalha.png"), auto;
    }

    body {
        height: 100vh;
        background: no-repeat center center fixed;
        background-size: cover;
    }

    #navbar {
        box-shadow: 0 20px 20px 0;
        border-style: double;
    }

    #icone {
        width: 70px;
        transition: transform 0.3s ease;
    }

    #icone:hover {
        transform: scale(1.1);
    }

    #icone_creditos {
        width: 30px;
    }

    .cor_fonte_claro {
        color: #e5a350;
    }

    .cor_fonte_escuro {
        color: #493722;
    }    

    .titulo_claro {
        text-decoration: underline;
        -webkit-text-stroke-width: 2px;
        -webkit-text-stroke-color: #8d7752;
    }
    
    .titulo_escuro {
        text-decoration: underline;
        -webkit-text-stroke-width: 2px;
        -webkit-text-stroke-color: #64553a;
    }

    .sombra {
        box-shadow: 5px 5px 5px 0 rgba(36, 40, 43);
    }

    .botoes {
        transition: transform 0.3s ease;
    }

    .botoes:hover {
        transform: scale(1.1);
    }

    #icone_batalhar {
        width: 18px;
    }

    .fundo_card_escuro {
        background-color: rgba(0, 0, 0, 0.3);
    }

    .fundo_card_claro {
        background-color: rgba(127, 127, 127, 0.3);
    }

    .cards {
        transition: transform 0.3s ease;
    }

    .cards:hover {
        transform: scale(0.95);
    }

    #direitos {
        width: 40px;
        text-decoration: underline;
    }

    #perfil_cadastro {
        width: 100px;
        height: 100px;
    }
</style>