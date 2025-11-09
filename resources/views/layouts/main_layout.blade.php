<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto: Jogo RPG</title>

    @include("layouts.partials.links")

    @include("layouts.partials.styles")
</head>
<body class="fst-italic">
    <div id="fundo"></div>

    @include("layouts.partials.alertas")
    
    @include("layouts.navbar")

    @include("layouts.audio_tema")
    
    @yield("content")

    @include("layouts.direitos")

    @include("layouts.partials.scripts");

    <img src="{{ asset('assets/images/gifs/' . (session('tema') === 'claro' ? 'fogo.gif' : 'fogo_invertido.gif')) }}" class="position-fixed bottom-0 start-50 translate-middle-x opacity-25 w-100 h-25">
</body>
</html>