<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 16</title>
</head>
<body>
    
    <form method="post">
        Primeiro valor: <input type="text" name="num1">
        Segundo valor: <input type="text" name="num2">
        <input type="submit" value="Enviar">
    </form>

    <?php
        if(isset($_POST["num1"]) && isset($_POST["num2"])){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            for($num1; $num1<=$num2; $num1++){
                $x=0;
                for($j=1; $j<=$num1; $j++){

                    if($num1%$j ==0){
                        $x++;
                    }
                }
                if($x==2){
                    echo("$num1 <br>");
                }

            }
        }else{
            echo("Insira dois valores");
        }
    ?>

</body>
</html>