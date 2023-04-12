<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeonato Mineiro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <div class="filtros">
        <h4>Filtro por data</h4>
        <form method="post">
            <p>Data Inicial</p>
            <input type="date" name="dataMin">
            <p>Data Final</p>
            <input type="date" name="dataMax">
            <input type="submit" value="Enviar">
        </form>
    </div>
    
    <div class="container">
        <div class="partidas">
                    <?php
                        $server = "localhost";
                        $database = "campeonato_mineiro";
                        $user = "root";
                        $senha = "root";

                        $conexao = mysqli_connect($server , $user, $senha , $database);

                        $select = "SELECT * FROM partidas";

                        if(isset($_POST["dataMin"]) && isset($_POST["dataMax"])){
                            $dataMin = $_POST["dataMin"];
                            $dataMax = $_POST["dataMax"];

                            $select = "SELECT * FROM partidas WHERE dataJogo >= '$dataMin' and dataJogo <= '$dataMax' ";
                        }

                        $info = mysqli_query($conexao , $select);


                        if(mysqli_num_rows($info) > 0 ){
                            while($data = mysqli_fetch_assoc($info)){
                                echo"<div class='times'>

                                        <div class ='time-nomes'>"
                                            .$data["time1"]
                                            . "<br>" 
                                            .$data["time2"]

                                        ."</div> <div class='horaio'>"
                                            .$data["dataJogo"]
                                            . "<br>" 
                                            .$data["horario"]
                                            
                                ."</div></div>";
                            }
                        }else{
                            echo"Não há jogos";
                        }

                        mysqli_close($conexao);
                ?>
        </div>
    </div>


</body>
</html>