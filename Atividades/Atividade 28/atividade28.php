<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Escola</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="get" class="form">
        Nome: <input type="text" name="nome">
        Data Nascimento: <input type="date" name="dataNasc">
        Responsável: <input type="text" name="responsavel">
        Endereco: <input type="text" name="endereco">
        Cpf: <input type="text" name="cpf">
        Escola: 
    
        <select name="nomeEscola">
            <?php
                include("conexao.php");

                $sql = "select * from escola";
                $resp = mysqli_query($conexao, $sql);
                while ($linha = mysqli_fetch_array($resp)) {
                    echo "<option >". $linha["nome"]."</option>" ;
            }
            ?>
        </select>
        <input type="submit" value="enviar">
    

    <?php
        if(isset($_GET["nome"]) && isset($_GET["dataNasc"]) && isset($_GET["responsavel"]) && isset($_GET["endereco"]) && isset($_GET["cpf"]) && isset($_GET["nomeEscola"])){
            $nome = $_GET["nome"];
            $dataNasc = $_GET["dataNasc"];
            $responsavel = $_GET["responsavel"];
            $endereco = $_GET["endereco"];
            $cpf = $_GET["cpf"];
            $nomeEscola = $_GET['nomeEscola'];

            $insert = "INSERT INTO aluno VALUES('$nome','$dataNasc','$endereco','$responsavel','$cpf','$nomeEscola')";

            if(mysqli_query($conexao,$insert)){
                echo"Realizado com sucesso";
            }else{
                echo("Falha ao inserir registro:" .$insert ."<br>" . mysqli_error($conexao));
            }

        }else{
            echo"Insira Os Valores";
        }
    ?>

</form>


</body>

</html>