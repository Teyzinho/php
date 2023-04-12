<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>

<?php
        $servidor ="localhost";
        $database = "corporativo";
        $user = "root";
        $senha = "root";

        $conexao = mysqli_connect($servidor, $user, $senha, $database);

        $selecao = "SELECT * FROM empregados WHERE numDependentes = 0";
        $result = mysqli_query($conexao, $selecao);

        if(mysqli_num_rows($result) > 0){
            echo "<ul>";
            while($data = mysqli_fetch_assoc($result)){
                echo "<br><br><l1>nome: ".$data["nome"] ."- horario Entrada:" .$data["horarioEntrada"] ." - salario: " .$data["salario"]
                 ." - Numéro Dependentes: " .$data["numDependentes"]. "</l1>";
            }
            echo "</ul>";
        }else{
            echo"Falha";
        }

        mysqli_close($conexao);

        ?>

        
    
    
</body>
</html>