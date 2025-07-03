<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Strings em PHP</h1>
    <h3>Existem dois tipos</h3>
    <?php 
        $name = "Joao";
        $middleName = "Oliveira \u{1F596}";
    ?>
    <ul>
        <li>double quoted: ""</li>
        <?php 
            echo "<p>Hey $name $middleName!</p>";

            // Neste caso o echo está juntando as variaveis dentro dele. A variavel middleName deveria ter sido processada, utilizando "", porém foi utilizado apenas ''.
            $middleName = 'Oliveira \u{1F596}';
            echo "<p>Hey $name $middleName!</p>";
        ?>
        <li>sigle quoted: '' -> Não há interpretação do conteúdo</li>
        <?php 
            echo '<p>Hey $name!</p>';
        ?>
        <li>Constantes: não fazem interpolação, é necessário usar concatenação</li>
        <?php
            const STATE = "MG";
            echo "Estado: STATE </br>";
            echo "Estado: ".STATE;
        ?>
        <li>Funções e algumas interpretações: deve ser usado o método de concatenar</li>
        <?php
            echo "Ano atual: " . date('Y');
        ?>
        <li>Sequência de Escape: \n (nova linha), \t (tabulação horizontal), \\ (barra invertida), \$ (cifrão) e \u{} (codepoint unicode)</li>
        <?php
            echo "$name \"Santos\" $middleName";
        ?>
    </ul>
</body>
</html>