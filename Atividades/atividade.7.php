<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
</head>
<body>
    <?php
        $num = rand(0, 5000);

        if($num%2 ==0){
            echo ("$num é par");
        }else{
            echo ("$num é impar");
        }
    ?>
</body>
</html>