<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $produto->PRODUTO_NOME }}</title>
</head>
<body>
    <h1>{{ $produto->PRODUTO_NOME }}</h1>  
    <p>{{ $produto->PRODUTO_DESC }}</p>
    <span>{{ $produto->PRODUTO_PRECO }} - {{ $produto->PRODUTO_DESCONTO }}</span>
</body>
</html>