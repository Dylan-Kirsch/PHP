<?php

    function afficherPuissancesDeux($nombre){

        $affichage = "";
        $nombre = 16;
        $i = 0;

        while ($i <= $nombre) { 

            $resultat = 2**$i;
            echo $affichage = "<li>2^".$i." = ".$resultat."</li>";
            $i++;
            
        }

    };


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <?=afficherPuissancesDeux($_GET["nombre"]);?>
    </ul>
    
</body>
</html>