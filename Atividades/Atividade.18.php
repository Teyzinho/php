<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 18</title>
</head>
<body>
    <?php

        if(isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["num3"]) && isset($_POST["num4"]) && isset($_POST["num5"])){
            
            $valores = array($_POST["num1"], $_POST["num2"],$_POST["num3"] ,$_POST["num4"] ,$_POST["num5"]);

            // for($i = 0; $i<5; $i++){
            //         for($j = 0; $j<5 ; $j++){
            //             if($valores[$j] <= $valores[0] && $valores[$j] <= $valores[1] && $valores[$j] <= $valores[2] && $valores[$j] <= $valores[3] && $valores[$j] <= $valores[4]){
            //                 echo($valores[$j] . "<br>");
        
            //                 $valores[$j] = "null";
            //                 $j=5;
            //         }
            //     }
            // }

            sort($valores);

            foreach ($valores as $key => $value) {
                echo($value . "<br>");
            }

        }else{
            echo("Insira os valores <br>");
        }
    ?>

    <form method="post">
        Primeiro valor : <input type="text" name="num1"><br>
        Segundo valor : <input type="text" name="num2"><br>
        Terceiro valor : <input type="text" name="num3"><br>
        Quarto valor : <input type="text" name="num4"><br>
        Quinto valor : <input type="text" name="num5"><br>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>