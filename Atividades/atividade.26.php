<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
    <link rel="stylesheet" href="css/atividade.5.css">
</head>
<body>
    <form method="post">
        <h1>Filtro por data</h1>
        <div>
            Data Inicial : <input type="date" name="dataInicial">
        </div>
        <div>
            Data Final : <input type="date" name="dataFinal">
        </div>
        <input type="submit" value="Enviar">
    </form>

    <?php
        $servidor ="localhost";
        $database = "clinicaOdonto";
        $user = "root";
        $senha = "root";

        $conexao = mysqli_connect($servidor, $user, $senha, $database);

        if(isset($_POST["dataInicial"]) && isset($_POST["dataFinal"])){
            $dataInicial = $_POST["dataInicial"];
            $dataFinal = $_POST["dataFinal"];

            $select = "SELECT * FROM paciente where dataConsulta >= '$dataInicial' AND dataConsulta <= '$dataFinal' ";
            //$select = "SELECT * FROM paciente where dataConsulta >= '$dataInicial' and dataConsulta <= '$dataFinal' ";
            $result = mysqli_query($conexao , $select);

            if(mysqli_num_rows($result) > 0){
                while($data = mysqli_fetch_assoc($result)){
                    echo "<br>nome: ".$data["nomePaciente"] . " | Consulta : " .$data["dataConsulta"] . " | Dentista : " .$data["dentista"];
                }

            }else{
                echo("Erro");
            }
        }else{
            echo"Inisra os valores";
        }
        


        mysqli_close($conexao);
    ?>

</body>
</html>