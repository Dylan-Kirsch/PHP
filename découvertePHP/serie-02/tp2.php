<?php

    function afficherLesNombres($nombre){

        $nombre = 10;

        for ($i = 1; $i  <= $nombre; $i++) { 

            echo $i;

        }
        
    };
    
    afficherLesNombres($_GET["nombre"]);
    
?>

<!-- ************************************** -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
</body>
</html>
