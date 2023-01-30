<?php

    $tableauNombre = [ 0, 1, 2, 3, 4, 5, 6 ];


    function sommeValeursDuTableau($pTableau)
    {
        //return array_sum($pTableau);
        $somme = 0;
        foreach($pTableau as $valeur)
        {
            $somme+=$valeur;
        }
        return $somme;
    }

    function moyenneValeursDuTableau($pTableau){

        return sommeValeursDuTableau($pTableau)/count($pTableau);
    }

    function calculerEcartMoyenneAuCarre($pnombre,$pMoyenne){

        return pow($pnombre-$pMoyenne,2);
    }

    function calculerSommeEcartMoyenneAuCarre($pTableau){

        $moyenne = moyenneValeursDuTableau($pTableau);
        $somme = 0;

        foreach($pTableau as $valeur)
        {
            $somme+=calculerEcartMoyenneAuCarre($valeur,$moyenne);
        }
        return $somme;
        
    }

    function calculerEcartType($pTableau){

    return sqrt(calculerSommeEcartMoyenneAuCarre($pTableau)/count($pTableau));
    
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
    
    <?php var_dump($tableauNombre);?>

    Somme = <?=sommeValeursDuTableau($tableauNombre)?><br>

    Moyenne = <?=moyenneValeursDuTableau($tableauNombre)?><br>

    EcartType =<?=calculerEcartType($tableauNombre) ?>

</body>
</html>