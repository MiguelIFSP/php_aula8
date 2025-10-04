<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <?php
        session_start();
        echo "Olá, {$_SESSION['nome']}."
    ?>
    <h1>Dados do produto: </h1>
    <form action="recebe_produto.php">
        <label for="">Nome do Produto:</label>
        <input type="text" name="nome"><br>
</body>
</html>