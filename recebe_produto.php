<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe produto</title>
</head>
<body>
    <?php

    session_start();
    
    $nome = $_GET['nome'];
    $d_criador = $_SESSION['id'];

    $comando "INSERT INTO `produtos`(`id`, `nome`, `id_criado`) 
    VALUES (NULL, '$nome','$id_criador')"

    // echo $comando;

    // conexao
    $servername = 'localhost';
    $banco = 'opina';
    $username = 'root';
    $password = '';

    $conexao = new PDO("mysql:host=$servername;dbname=$banco", 
    $username, $password);


    // preparar
    $sth = $conexao->prepare($comando);

    // executar
   $resultado = $sth->execute();

   // verificar resultado
    if($resultado) {
        echo "Produto $nome salvo com sucesso!";
    } else {
        echo "Erro ao salvar o produto.";
    }    
    ?>

</body>
</html>