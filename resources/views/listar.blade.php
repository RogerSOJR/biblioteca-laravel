<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
</head>

<body>
    <h1>Produtos</h1>
    <label for="lblNome">Nome:</label>
    <input type="text" name="nome" value="{{ $produto->nome }}">
    <br><br>
    <label for="lblValor">Valor:</label>
    <input type="text" name="nome" value="{{ $produto->valor }}">
    <br><br>
    <label for="lblQuantidade">Quantidade:</label>
    <input type="text" name="nome" value="{{ $produto->estoque }}">
    <br><br>
</body>

</html>