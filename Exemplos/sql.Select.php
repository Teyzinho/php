<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    
</head>
<body>

    <?php
        $servidor = "localhost"; //nome do servidor
        $database = "escola"; //nome do banco de dados
        $usuario = "root"; //usuario
        $senha = "root"; //senha

        $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

        $sql = "SELECT codColab,nome FROM colaboradores";
        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado) > 0){
            while($dado = mysqli_fetch_assoc($resultado)) {
                echo "<br> Codigo: ".$dado["codColab"]. " Nome : " . $dado["nome"];
            }
        }else{
            echo("Falha!");
        }

        mysqli_close($conexao);
    ?>
    
    <!-- <form>
        ID : <input type="text" name="nome" value="">
        Nome : <input type="text" name="nome" value="">
        Lagradouro : <input type="text" name="lagradouro" value="">
        Bairro : <input type="text" name="bairro" value="">
        Cidade : <input type="text" name="cidade" value="">
        Idade : <input type="text" name="idade" value="">

    </form> -->
</body>
</html>