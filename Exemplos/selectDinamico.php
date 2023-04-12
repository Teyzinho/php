<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dinamico</title>
</head>
<body>
    <form method="post">
        Situação:<input type="text"><br>
        Registro Colaborador:
        <select name="codNomeColab">
    </form>
    <?php 
    include("conectar.php");
    $sql="select * from colaboradores";
    $resp=mysqli_query($conexao,$sql);
    while($linha=mysqli_fetch_array($resp)){
        echo"<option value=''>".$linha["cod_colab"]."-".$linha["nome"];
    }
    ?>
    </select><br>
    Sexo: <input type="radio" name="sexo" value="f"> Feminino <input type="radio" name="sexo" value="m"> Masculino<br>
    <input type="submit" value="acessar">
</body>
</html>