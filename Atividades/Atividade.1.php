<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $peso = 65;
        $altura = 1.75;
        $imc = $peso/($altura*$altura);

        echo ("O imc do peso $peso kg, e a altura $altura m, é de : $imc");
    ?>

</body>
</html>