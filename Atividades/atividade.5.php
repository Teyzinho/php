<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    
    <?php
        $num = rand(365,5000);
        $years = ($num/365);
        $months = ($num%365/30);
        $days = ($num%365%30);
        echo("$num tem <br>".(int)$years." anos <br>".(int)$months." meses<br>$days dias");
    ?>

</body>
</html>