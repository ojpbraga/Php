<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tipos Primitivos</h1>
    
    <h2>Escalares:</h2>
    <ul>
        <li>Int</li>
        <li>Float</li>
        <li>String</li>
        <li>Boolean</li>
    </ul>
    <h2>Compostos:</h2>
    <ul>
        <li>Array</li>
        <li>Object</li>
    </ul>
    <h2>Especiais:</h2>
    <ul>
        <li>null</li>
        <li>resource</li>
        <li>callabe</li>
        <li>mixed: representa todos os tipos primitivos</li>
    </ul>
    <?php
        $num = 3e2;
        // Mostrando o tipo:
        var_dump($num);

        // Modificando o tipo:
        $num = (int) 3e2;
        var_dump($num);

        $num = (int) "32";
        var_dump($num);

        // Boolean
        $extended = true;
        echo "Status: $extended ";

        // false é considerado vazio
        $extended = false;
        echo "Status: $extended ";

        
        // Array
        $var = [0, 3.7, "hi", 5, false];
        var_dump($var);

        
        // Object
        class human {
            private int $age;
        }
        $jonh = new human;
        var_dump($jonh);

    ?>
</body>
</html>