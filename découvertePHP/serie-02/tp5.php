<?php

    function afficherPuissancesDeDeux($nombre){

        $nombre = 10;

        for ($i=0; $i <= $nombre; $i+=1) { 

            $resultat = 2**$i;
            
            echo $resultat."^";

        }

    };

    afficherPuissancesDeDeux($_GET["nombre"]);


    function afficherPuissancesDeux($nombre){

        $nombre = 7;
        $affichage = "";

        for ($i=0; $i <= $nombre; $i+=1) { 

            $resultat = 2**$i;
            
            echo $affichage .= "<li>2^".$i."=".$resultat."</li>";

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