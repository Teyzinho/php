<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
    <link rel="stylesheet" href="css/atividade.5.css">
</head>
<body>

    <?php
        $servidor ="localhost";
        $database = "clinicaOdonto";
        $user = "root";
        $senha = "root";

        $conexao = mysqli_connect($servidor, $user, $senha, $database);

        
        $select = "SELECT * FROM paciente";
        $result = mysqli_query($conexao , $select);

        if(mysqli_num_rows($result) > 0){
            while($data = mysqli_fetch_assoc($result)){
                echo "<br>nome: ".$data["nomePaciente"] . " | Consulta : " .$data["dataConsulta"] . " | Dentista : " .$data["dentista"];
            }

        }else{
            echo("Erro");
        }


        mysqli_close($conexao);
    ?>

</body>
</html>