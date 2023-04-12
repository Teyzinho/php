<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
</head>
<body>
    <?php
        if(isset($_GET["nome"]) && isset($_GET["snome"]) && isset($_GET["cpf"])){
            $nome = $_GET["nome"];
            $snome = $_GET["snome"];
            $cpf = $_GET["cpf"];
            echo("OLÁ $nome $snome. CPF cadastrado $cpf<br>");
        }else{
            echo("Difite os dados solicitados.<br>");
        }
    ?>

    <form method="get">
        Nome: <input type="text" name="nome"><br>
        Sobrenome Nome: <input type="text" name="snome"><br>
        CPF: <input type="text" name="cpf"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>