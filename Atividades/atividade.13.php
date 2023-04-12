<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade.13</title>
</head>
<body>

    <?php
        if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
            $delta = ($b*$b) - (4*$a*$c);
            $x1 = (-($b) + sqrt($delta))/(2*$a);
            $x2 = (-($b) - sqrt($delta))/(2*$a);
            
            echo("delta = $delta <br> x1 = $x1 <br> x2 = $x2");

        }else{
            echo("Insira os valores <br>");
        }
    ?>

    <form method="post">
        Insira o valor de A : <input type="text" name="a"><br>
        Insira o valor de B : <input type="text" name="b"><br>
        Insira o valor de C : <input type="text" name="c"><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>