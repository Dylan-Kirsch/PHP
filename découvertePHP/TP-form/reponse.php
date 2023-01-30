<?php

    // if ($_POST)
    // {
    //     echo "contenu de post";
    //     print_r($_POST);
    // }
    
    

?>

<?php 

    if (count($_POST)>0) {
?>
        <h1>Bonjour, <?php echo strip_tags($_POST['nom']);?><?php echo strip_tags($_POST['prenom']);?></h1>
        <h2>Ma date de naissance: <?php echo strip_tags($_POST['dateNaissance']);?></h2>
        <h2>Votre mot de passe est: <?php echo strip_tags($_POST['mdp']);?></h2>
        <h2>Mon Identifiant: <?php echo strip_tags($_POST['identifiant']);?></h2>

<?php

    } else {

        echo "ERREUR";

    }

    // clquer sur le lien de la page et ENTRER pour afficher l'erreur

?>


