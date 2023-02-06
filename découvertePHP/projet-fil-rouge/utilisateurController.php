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
            $utilisateur = $reponse->getData();
            if ($utilisateur)
                include 'views\afficherUtilisateur.php';
        
            else
                include('views\photoNonTrouvee.php');
        }
        else
        include('views\afficherException.php');
        
        $content = ob_get_clean();
        include 'views/layout.php';

    }

?>