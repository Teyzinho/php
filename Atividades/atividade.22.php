<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>

<?php
        $servidor ="localhost";
        $database = "escola";
        $user = "root";
        $senha = "root";

        $conexao = mysqli_connect($servidor, $user, $senha, $database);

        $selecao = "SELECT * FROM colaboradores WHERE idade > 30";
        $result = mysqli_query($conexao, $selecao);

        if(mysqli_num_rows($result) > 0){
            while($data = mysqli_fetch_assoc($result)){
                echo "<br><br><l1>nome: ".$data["nome"];
            }
        }else{
            echo"Falha";
        }

        mysqli_close($conexao);

        ?>

    
</body>
</html>