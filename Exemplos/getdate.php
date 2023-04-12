<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=0, initial-scale=1.0">
    <title>GetHours</title>
</head>
<body>
    
    <?php
    
        // [seconds] segundos
        // [minutes] minutos
        // [hours] horas
        // [mday] dia do mês
        // [mon] mês 
        // [year] ano 
        // [yday] dia do ano 
        // [weekday] dia da semana
        // [month] nome do mês

        $hoje = getdate();
        $dia = $hoje["weekday"];
        echo "$dia";
    ?>


</body>
</html>