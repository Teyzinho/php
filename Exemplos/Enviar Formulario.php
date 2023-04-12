<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
            // O metodo isset verifica se a variável esta preenchida
        if(isset($_POST["pNome"]) && isset($_POST["sNome"])){
            $pNome = $_POST["pNome"];
            $sNome = $_POST["sNome"];
            echo("Olá $pNome $sNome");
        }else{
            echo("Insira seu nome<p>");
        }
    ?>

    <form method="post">
        Primeiro nome : <input type="text" name="pNome"><br>
        Sobrenome : <input type="text" name="sNome"><br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>