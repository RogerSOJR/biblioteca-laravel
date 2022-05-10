<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            margin-bottom: 1%;
        }

        .btnExc{
            background-color: inherit;
            color: #c72c2c;
            border: 1px solid #c72c2c;
            border-radius: 4px;
            padding: 12px 0px 12px;
            width: 80px;
            font-family: 'Montserrat', sans-serif;
            cursor: pointer;
            transition-duration: 0.4s;
        }

        .btnEdi{
            background-color: inherit;
            color: #2c62c7;
            border: 1px solid #2c62c7;
            border-radius: 4px;
            padding: 12px 0px 12px;
            width: 80px;
            font-family: 'Montserrat', sans-serif;
            cursor: pointer;
            transition-duration: 0.4s;
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

        .btnExc:hover{
            background-color: #c72c2c;
            color: #FDFFFC;
        }

        .btnEdi:hover{
            background-color: #2c62c7;
            color: #FDFFFC;
        }

        .btnLis:hover {
            background-color: #132430;
        }

        table{
            width: 100%;
            padding: 2%;
            background-color: #011627;
            color: #FDFFFC;
            text-align: center;
        }
        
        .imp{
            width: 35%;
        }
    </style>
</head>

<body>
    <div class="cabecalho">
        <h1>Produtos</h1>
        <button class="btnLis" onclick="location.href='/'">Cadastrar</button>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Estoque</th>
        </tr>
    <?php
    for ($i = 0; $i < count($produto); $i++) {
        $id = $produto[$i]['id'];
        $nome = $produto[$i]['nome'];
        $valor = $produto[$i]['valor'];
        $estoque = $produto[$i]['estoque'];
        echo "<tr>
                <td>$id</td>
                <td class='imp'>$nome</td>
                <td class='imp'>$valor</td>
                <td>$estoque</td>
                <td><button class='btnEdi' onclick='location.href=`/editar-produto/$id`;'>Editar</button></td>
                <td><button class='btnExc' onclick='location.href=`/excluir-produto/$id`;'>Excluir</button></td>
            </tr>";
    }
    ?>
    </table>
</body>

</html>