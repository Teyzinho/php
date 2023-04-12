<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsertL</title>
    
</head>
<body>

    <?php
        $servidor = "localhost"; //nome do servidor
        $database = "escola"; //nome do banco de dados
        $usuario = "root"; //usuario
        $senha = "root"; //senha

        $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

        $sql = "INSERT INTO colaboradores VALUES(12475, 'Daniela Matekita Jacome Alves', 'Avenida Bragaça Paulista', 'Jardin das Cores', 'Campinas' ,61)";
        
        
        if(mysqli_query($conexao,$sql)){
            echo"Realizado com sucesso";
        }else{
            echo("Falha ao inserir registro:" .$sql ."<br>" . mysqli_error($conexao));
        }

        mysqli_close($conexao);
    ?>

</body>
</html>