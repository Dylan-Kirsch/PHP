<?php require_once 'films.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php //var_dump($listeFilms) ;?>

    <ul>
        
        <?php foreach($listeFilms as $film):?>

                <li> <?=$film['titre']?> : <?=$film['realisateur']?></li>

        <?php endforeach; ?>

   </ul>
  
        <?php foreach ($listeFilms2 as $key=>$film):?>

            <?=$key?>

            <ul>
                <li> <?=$film['realisateur']?></li>
                <li> <?=$film['annee']?></li>
                <li> <?=$film['note']?></li>
            </ul>

        <?php endforeach; ?>

   </ul>

</body>
</html>