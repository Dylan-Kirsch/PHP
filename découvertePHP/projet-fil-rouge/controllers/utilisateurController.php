<?php

    function afficherUtilisateurs()
    {

        $reponse = UtilisateursDB::lister();

        if ($reponse->isSuccessfull())
        {
            $listeUtilisateur = $reponse->getData();
            foreach ($listeUtilisateur as $utilisateur) 
            {

                include('views\afficherUtilisateur.php');

            }
        } 
        else
        include('views\afficherException.php');
    }


    function afficherUnUtilisateur($pId)
    {

        ob_start();

        $reponse = UtilisateursDB::lire($pId);

        if ($reponse->isSuccessfull())
        {

            if ($reponse->isDataFound())
            {

                $utilisateur = $reponse->getData()[0];
                include 'views\afficherUtilisateur.php';

            }
            else
                include('views\utilisateurNonTrouvee.php');
        }
        else
        include('views\afficherException.php');
        
        $content = ob_get_clean();
        include 'views/layout.php';

    }

    function ajouterGalerie()
    {
    // Début de la mise en cache
    ob_start();
    
    if (count($_POST)==0)
    {
        $utilisateurs = UtilisateursDB::lister()->getData();
        $_SESSION['codesecret']=password_hash((time()+566655545), PASSWORD_DEFAULT);
        include 'views\formulaire.php';
    }
    else
    {   
        if ($_POST['codesecret'] && $_POST['codesecret'] == $_SESSION['codesecret'])
        {
            $resultat = PhotoDB::creer($_POST);
            if ($resultat)
                include 'views\galerieAjouter.php';
            else
            {
                $utilisateurs = UtilisateursDB::lister()->getData();
                include 'views\formulaire.php';
            }
        }
        else
        echo "JE T'AI VU";
            
    }

    $content = ob_get_clean();
    // fin mise en cache et affichage du layout avec la vue
    include 'views/layout.php';
    }

?>