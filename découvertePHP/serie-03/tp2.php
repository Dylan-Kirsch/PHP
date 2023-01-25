<?php

    $tableauNombre = [ 0, 1, 2, 3, 4, 5, 6 ];
    
    echo count($tableauNombre);

    function tableau_somme($p_tableau){

        $somme = 0;

        for ($i=0; $i < count($p_tableau) ; $i++) { 
            
            $somme += $p_tableau[$i];
        }
        return $somme;
    
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
    
    <p>
       la somme et <?=tableau_somme($tableauNombre)?>
    </p>

    <p>
       la moyenne et <?=tableau_somme($tableauNombre) / count($tableauNombre)?>
    </p>

</body>
</html>