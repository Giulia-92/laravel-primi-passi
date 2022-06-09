<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista:</h2>
    <ul>
        @foreach ($lista_alimenti as $nome_alimento)
           <li>{{ $nome_alimento }}</li>
        @endforeach
    </ul>
<a href="{{route('home')}}">torna alla home</a>
</body>
</html>