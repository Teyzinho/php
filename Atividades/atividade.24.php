<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
    <link rel="stylesheet" href="css/atividade.5.css">
</head>
<body>
        <form  method="post">
            <div>
                Nome : <input type="text" name="nome" value="">
            </div>

            <div>
            Idade : <input type="text" name="idade" value="">
                
            </div>
            <div>
            data : <input type="date" name="data" value="">

            </div>
            <div>
            dentista : <input type="text" name="dentista" value="">

            </div>

            <input type="submit" value="Enviar">
        </form>

    <?php
        $servidor ="localhost";
        $database = "clinicaOdonto";
        $user = "root";
        $senha = "root";

        $conexao = mysqli_connect($servidor, $user, $senha, $database);

        if(isset($_POST["nome"]) &&isset($_POST["idade"]) && isset($_POST["data"]) && isset($_POST["dentista"])){
            
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $dataConsulta = $_POST["data"];
            $dentista = $_POST["dentista"];

            $sql = "INSERT INTO paciente VALUES('$nome', '$idade', '$dataConsulta', '$dentista')";
            $select = "SELECT * FROM paciente where nome = $nome";

            if(mysqli_query($conexao,$sql)){
                echo"Realizado com sucesso";
            }else{
                echo("Falha ao inserir registro:" .$sql ."<br>" . mysqli_error($conexao));
            }

        }else{
            echo("Insira os Valores");
        }


        mysqli_close($conexao);
    ?>

</body>
</html>