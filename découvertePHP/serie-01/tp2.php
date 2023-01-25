<?php

    $duree = 6700;
    $hours = floor($duree / 3600);
    $minutes = floor(($duree / 60) % 60);
    $seconds = $duree % 60;

    $message = $hours."h".$minutes."m".$seconds."s";

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
    
    <script>

        alert("<?=$message?>");

    </script>
     
</body>
</html>