<?php require_once 'individus.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <?php
        foreach($individu as $cle=>$valeur)
        {
        ?>
            <li><?=$cle?> = <?=$valeur?></li>

    <?php 
        }
    ?>
    
    </ul>

        <?php
            $individus=[$individu,$individu2,$individu3];
            foreach ($individus as $unIndividu)
            {
            foreach($unIndividu as $cle=>$valeur)
            {
        ?>

            <li><?=$cle?> = <?=$valeur?></li>

        <?php 
            }
        ?>

    </ul>
<?php
    }
?>
</body>
</html>