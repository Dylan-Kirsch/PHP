<?php

    function afficherUtilisateurs()
    {

        ob_start();

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

        $content = ob_get_clean();
        include 'views/layout.php';

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
                include('views\photoNonTrouvee.php');
        }
        else
        include('views\afficherException.php');
        
        $content = ob_get_clean();
        include 'views/layout.php';

    }

?>