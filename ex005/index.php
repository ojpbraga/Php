<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulários</h1>
    <h3>Para formulários é necessário</h3>
    <ul>
        <li>action</li>
        <li>value</li>
    </ul>
    <form action="/ex005/cad.php" method="post">
        <label for="name">
            Nome
            <input type="text" name="name" id="name">
        </label>
        <label for="middle-name">
            Sobrenome
            <input type="text" name="middle-name" id="middle-name">
        </label>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>