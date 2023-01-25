<?php

    $affichage = "";

    for ($i=0; $i <= 16; $i+=1) { 

        $resultat = 2**$i;
        $affichage .= "<li>2^".$i."=".$resultat."</li>";

    }

    $affichage2 = new ArrayObject();

    for ($i=0; $i <= 16; $i+=1) { 

        $resultat = 2**$i;
        $affichage2->append("2^".$i."=".$resultat."");

    }

    $affichage3 = "";
    $i=0;

    while ($i <= 16) { 

        $resultat = 2**$i;
        $affichage .= "<li>2^".$i."=".$resultat."</li>";
        $i++;
        
    }
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
    <?=$affichage;?>
</ul>
        <ul>
        <?php
        foreach ($affichage2 as $key => $value) {
            echo "<li>".$value."</li>";
        }?>
</ul>
</body>
</html>