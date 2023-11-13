<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>
    <?php 
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    echo"<p>Olá, $nome $sobrenome, seja bem-vindo!</p>"
    ?>
</body>
</html>