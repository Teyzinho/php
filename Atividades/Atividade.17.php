<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 17</title>
</head>
<body>
    <?php
 $y=0;
 $j=1;
        for($i=0; $i<=2594;){
            echo($y);
            echo("<br>");
            $w = $y;
            $y = $i+$j;
            $j = $i; 
            $i += $y-$w; 
            
            if($i==0){
                $i++;
            }
        }
    ?>
</body>
</html>