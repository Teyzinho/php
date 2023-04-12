<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <?php
        $base = 4;
        $altura = 5;
        $raio = 5;

        $areaTriangulo = ($base*$altura)/2;
        $areaRetangulo = $base*$altura;
        $areaCirculo = 3.14 *($raio * $raio);

        echo "base = $base <br> altura = $altura <br> raio = $raio <br>";
        echo "area do triangulo : $areaTriangulo <br> area do retângulo : $areaRetangulo <br> area do circulo : $areaCirculo <br>"
    ?>

</body>
</html>