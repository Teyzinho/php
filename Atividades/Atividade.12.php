<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 12</title>
</head>
<body>
    
    <?php
        if(isset($_POST["peso"]) && isset($_POST["altura"])){
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];
            $imc = $peso/($altura*$altura);
            echo ("O imc do peso $peso kg, e a altura $altura m, é de : $imc <br>");

            if($imc<18.5){
                echo("baixo peso");
            }elseif($imc>=18.5 && $imc < 24.9){
                echo("eutrofia");
            }elseif($imc>=25 && $imc < 29.9){
                echo("sobrepeso");
            }else{
                echo("obesidade");
            }

        }else{
            echo("Insira seu peso e altura");
        } 
    ?>

        <form method="post">
            Peso : <input type="text" name="peso" value=""><br>
            Altura : <input type="text" name="altura" value=""><br>
            <input type="submit" value="Enviar">
        </form>

</body>
</html>