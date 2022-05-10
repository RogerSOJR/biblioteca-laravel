<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../css/app.css" />
    <title>Produtos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

        body{
            font-family: 'Montserrat', sans-serif;
        }

        .cabecalho{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background-color: #011627;
            color: #FDFFFC;
            padding: 1%;
        }

        .formulario{
            display: grid;
            row-gap: 10px;
            background-color: #eaeaea;
            padding: 2%;
            border: 5px solid #011627;
        }

        input{
            height: 30px;
            width: 75%;
            margin-bottom: 1%;
            border-radius: 5px;
        }

        .btnCad{
            background-color: #2EC4B6;
            color: #FDFFFC;
            border: none;
            border-radius: 4px;
            padding: 12px 0px 12px;
            width: 80px;
            font-family: 'Montserrat', sans-serif;
            cursor: pointer;
        }

        .btnLis{
            background-color: inherit;
            color: #FDFFFC;
            border: none;
            width: 10%;
            font-family: 'Montserrat', sans-serif;
            cursor: pointer;
            font-size: 25px;
            transition-duration: 0.4s;
        }

        .btnLis:hover {
            background-color: #132430;
        }
    </style>
</head>

<body>
    <div class="cabecalho">
        <h1>Produtos</h1>
        <button class="btnLis" onclick="location.href='/listar-produtos'">Listar</button>
    </div>
    <form class="formulario" action="/cadastrar-produto" method="POST">
        @csrf
        <label for="lblNome">Nome:</label>
        <input class="input" type="text" name="nome">
        <label for="lblValor">Valor:</label>
        <input class="input" type="text" name="valor">
        <label for="lblQuantidade">Quantidade:</label>
        <input class="input" type="text" name="estoque">
        <button class="btnCad">Cadastrar</button>
    </form>
</body>

</html>