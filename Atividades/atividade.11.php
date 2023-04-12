<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 11</title>
</head>
<body>
    
    <?php
        $paises = array("Qatar","Ecuador","Senagal","Netherlands","England","Iran","USA","WALES",
        "Argentina","Saudi Arabia","Mexico","Poland","France","Australia","Denmark","Tinusia"
        ,"Sapin","Costa Rica","Germany","Japan","Belgium","Canada","Morocco","Croatia","Brazil",
        "Serbia","Switzerland","Cameroon","Portugal","Ghana","Uruguay","Korea Republic");

        for($i=0; $i<sizeof($paises); $i+=4){
            echo($paises[$i]);
            echo(" x ");
            echo($paises[$i+2]);
            echo("<br>");

            echo($paises[$i+1]);
            echo(" x ");
            echo($paises[$i+3]);
            echo("<br>");
        }

    ?>

</body>
</html>