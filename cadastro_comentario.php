<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de comentarios</title>
</head>
<body>
    <form action="recebe_comentario.php">
        <label for="">ID Produto:</label>
        <?php
        if(isset($_GET['id'])){
        ?>
            <input type="hidden" name="id_produto" value='<?=$_GET['id']?>'><br>
        <?php
        } else{
        ?>
            <input type="hidden" name="id_produto"><br>
        <?php
        }
        ?>
    
    <label for="">Comentario:</label>
    <input type="text" name="comentario"><br>
    <input type='submit'>

</body>
</html>