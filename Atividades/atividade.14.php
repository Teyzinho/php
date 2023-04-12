<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 14</title>
</head>
<body>
    <?php

        if(isset($_POST["a"]) && isset($_POST["b"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            

            echo("(a+b)² = ".pow(($a+$b),2) );
            echo("<br>(a-b)² = ".pow(($a-$b),2 ) );
        }else{
            echo("Insira um valor");
        }
    ?>

    <form method="post">
        Insira o valor de a : <input type="text" name="a" >
        Insira o valor de b : <input type="text" name="b" >
        <input type="submit" value="Enviar">
    </form>
</body>
</html>