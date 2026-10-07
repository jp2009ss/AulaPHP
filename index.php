<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
</head>
<body>

        <form method = "POST" action = "processo.php">
        Nome : <input type= "text" name= "nome">
        Endereço : <input type= "text" name= "endereco">
        Data de Nascimento : <input type= "date" name= "nascimento">
        <input type = "submit" value = "Enviar">
        </form>

        <?php  

        echo "<h1><b> Esta é uma página PHP.</b></h1>";

        ?>
    
</body>
</html>