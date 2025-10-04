<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salva comentários</title>
</head>
<body>
    <?php
    // conexao
    $servername = 'localhost';
    $banco = 'opina';
    $username = 'root';
    $password = '';

    $conexao = new PDO("mysql:host=$servername;dbname=$banco", $username, $password);

    $id_produto = $_GET['id'];
    $comentario = $_GET['comentario'];
    
    session_start();
    $id_usuario = $_SESSION['id'];

    $comando = "INSERT INTO `comentarios`(`id`, `comentario`, `id_produto`, 
    `id_comentador`) VALUES (NULL, '$comentario', '$id_produto', '$id_usuario')"


    ?>
</body>
</html>