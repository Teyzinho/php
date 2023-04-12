<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 9</title>
</head>
<body>
    
    <?php
        $byte = rand(1000, 100000);
        $bit = $byte/8;
        $kb = $byte*1000;
        $mb = $byte*1000 * 1000;
        $gb = $byte*1000 * 1000*1000;
        $tb = $byte*1000 * 1000 * 1000 * 1000;

        echo("num aleatório = $byte Byte <br>");
        echo("bit = $bit , kb =$kb , mb = $mb , gb = $gb , tb = $tb");
    ?>

</body>
</html>