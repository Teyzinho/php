<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 8</title>
</head>
<body>
    
    <?php

    for($i = 0; $i <= 5000; $i++){
        $num = 0;
        for($j = 1; $j <= $i; $j++){
            if($i%$j == 0){
                $num++;
            }
        }
        if($num==2){
            echo ("$i <br>");
        }
    }

    ?>

</body>
</html>