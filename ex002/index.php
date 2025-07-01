<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Essa tag será processada dentro do servidor e o client recebe ela já pronta
        date_default_timezone_set("America/Sao_Paulo");
        echo "<h1>Hoje é dia " . date("d/M/Y") . " horas: " . date("G:i:s T") . "</h1>";
    ?>
</body>
</html>