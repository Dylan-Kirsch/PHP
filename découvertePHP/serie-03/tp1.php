<?php

    // tableau simple : 
    
    $tableau[0] = 2023;
    $tableau[1] = " DEVWEB-18-S2 ";
    $tableau[2] = 11.12;

    // tableau à 2 dimensions : 
    $tab[0][0] = 12;
    $tab[0][1] = " tv ";
    $tab[1][0] = 1245.678;
    $tab[1][1] = " bye ";

    // tableau associatif : 
    $toto["Nom"] = "le nom de famille de Toto... ";
    $toto["Age"] = 12;
    $toto["Adresse"] = "22 rue des bois fleuri";

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
    <?php
    foreach($tableau as $value)
    {?>
        <li><?=$value;?></li>
    <?php
    }?>
    </ul>
    <ul>
    <?php
    foreach($tab as $value)
    {
        foreach($value as $element)
        {
        ?>
        <li><?=$element;?></li>
    <?php
        }
    }?>
    </ul>
    <ul>
    <?php
    foreach($toto as $key=>$value)
    {?>
        <li><?=$key;?>=><?=$value;?></li>
    <?php
    }?>
    </ul>
    
</body>
</html>