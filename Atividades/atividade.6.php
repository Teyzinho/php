<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    
    <?php
        $data = getdate();
        $day = $data["mday"];
        $month = $data["month"];
        $year = $data["year"];
        $hours = $data["hours"];
        $minutes = $data["minutes"];
        

        echo ("Aos $day do mês $month de $year, às $hours e $minutes na cidade de Pará de Minas,
        Ocorreu a assembleia escolar.");
    ?>

</body>
</html>