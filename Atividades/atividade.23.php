<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <form  method="post" class="form">

        ID : <input type="text" name="id" value="">
        Nome : <input type="text" name="nome" value="">
        Lagradouro : <input type="text" name="lagradouro" value="">
        Bairro : <input type="text" name="bairro" value="">
        Cidade : <input type="text" name="cidade" value="">
        Idade : <input type="text" name="idade" value="">

        <input type="submit" value="Enviar">

    </form>

    <?php
        $servidor ="localhost";
        $database = "escola";
        $user = "root";
        $senha = "root";

        $conexao = mysqli_connect($servidor, $user, $senha, $database);

        if(isset($_POST["id"]) &&isset($_POST["nome"]) && isset($_POST["lagradouro"]) && isset($_POST["bairro"]) && isset($_POST["cidade"]) &&
        isset($_POST["idade"])){
            
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $lagradouro = $_POST["lagradouro"];
            $bairro = $_POST["bairro"];
            $cidade = $_POST["cidade"];
            $idade = $_POST["idade"];

            $sql = "INSERT INTO colaboradores VALUES($id, '$nome', '$lagradouro', '$bairro', '$cidade' ,$idade)";

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