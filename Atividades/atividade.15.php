<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 15</title>
</head>
<body>
    
    <?php
        if(isset($_POST["capital"]) && isset($_POST["juros"]) && isset($_POST["prazo"])){
            $capital = $_POST["capital"];
            $juros = $_POST["juros"]/100;
            $prazo = $_POST["prazo"];
            $montante = $capital*pow(1+$juros,$prazo);
            $jurosComposto = $montante - $capital;
            $jurosSimples = $capital * $prazo * $juros;

            echo("Montante  $montante <br> Juros Composto  $jurosComposto <br> Juros Simples $jurosSimples");

        }else{
            echo("Insira os valores");
        }
    ?>

    <form method="post">
        Capital : <input type="text" name="capital"> <br>
        Juros a.m (porcentagem): <input type="text" name="juros"> <br>
        prazo em meses : <input type="text" name="prazo"> <br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>