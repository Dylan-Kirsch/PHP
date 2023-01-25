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

        $x = 50;
        $y = 3;

        $resultat = floor($x / $y);
        $reste = $x % $y;

        echo "Le résultat de la division entière de 50 par 3 est de ".$resultat." et reste ".$reste;

    ?> 


</body>
</html>