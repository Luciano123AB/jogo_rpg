<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto: Projeto Limpo</title>
    @include("layouts.partials.links")
</head>
<body class="bg-light text-center fst-italic">
    @yield("content")

    @include("layouts.partials.scripts")
</body>
</html>
