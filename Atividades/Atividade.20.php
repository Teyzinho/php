<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servidor ="localhost";
        $database = "corporativo";
        $user = "root";
        $senha = "root";

        $conexao = mysqli_connect($servidor, $user, $senha, $database);

        $selecao = "SELECT * FROM empregados";
        $result = mysqli_query($conexao, $selecao);

        $sql = "INSERT INTO empregados VALUES(7,'Ana Julia Margarete Pereira', '5h', 788, 2)";
        $sql = "INSERT INTO empregados VALUES(8, 'Geraldo Magela Assis', '14h', 790, 0)";
        $sql = "INSERT INTO empregados VALUES(9, 'Célia Maria Gorette', '14h', 810, 5)";
        $sql = "INSERT INTO empregados VALUES(10, 'Leonardo Folgaça Nunes', '5h', 875, 0)";
        $sql = "INSERT INTO empregados VALUES(11,'Raimundo Januário Lopes' , '14h', 880, 3)";
        $sql = "INSERT INTO empregados VALUES(12,'Bianca Soares Assis',  '14h', 920, 2)";
        $sql = "INSERT INTO empregados VALUES(13,'Marionete da Cruz Patrocínio', '5h', 930, 1)";


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

        if(mysqli_query($conexao,$sql)){
            echo"Realizado com sucesso";
        }else{
            echo("Falha ao inserir registro:" .$sql ."<br>" . mysqli_error($conexao));
        }

        mysqli_close($conexao);

    ?>
</body>
</html>