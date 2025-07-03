<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado do Processamento</h1>
    
    <main>
        <?php
            // Variaveis super globais: $_get, $_post, $_request (é uma junção das outras tres juntas), $_cookies
            var_dump($_POST);

            // Operador null coa...: caso não encontre o valor, retornara outro ??

            $name = $_POST["name"] ?? "nome";
            $middleName = $_POST["middle-name"] ?? "desconhecido";
            echo "</br></br>Bem vindo, $name $middleName!";
        ?>
        </br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>