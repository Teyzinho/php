<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão</title>
</head>
<body>
    
    <?php
        $servidor = "localhost"; //nome do servidor
        $database = "escola"; //nome do banco de dados
        $usuario = "root"; //usuario
        $senha = "root"; //senha

        $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

        
        
        if(!$conexao){
            die("Falha na conexão" .mysqli_connect_error());
        }else{
            echo("Conexão realizada com sucesso");
        }

        mysqli_close($conexao);
    ?>

</body>
</html>