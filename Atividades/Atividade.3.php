<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <?php
        $num = rand(1200 ,10000);
        echo ("Número é : $num<br>");

        if($num <= 3000){
            $acrescimo = 0.07;
        }elseif($num >3000 && $num <=5000){
            $acrescimo = 0.04;
        }else{
            $acrescimo = 0.02;
        }
        $final = ($num*$acrescimo)+$num;

        echo ("A porcentagem vai ser de : ");
        echo ($acrescimo*100);
        echo ("% <br> O resultado é de: $final");
    ?>

</body>
</html>