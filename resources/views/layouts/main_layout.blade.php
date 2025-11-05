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
<body style="background-image: url({{ asset("assets/images/fundos/$imagem") }});" class="fst-italic">
    @include("layouts.partials.alertas")
    
    @include("layouts.navbar")
    
    @yield("content")

    @include("layouts.direitos")

    @include("layouts.partials.scripts");
</body>
</html>
