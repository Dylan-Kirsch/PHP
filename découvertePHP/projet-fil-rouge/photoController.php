<?php

    function afficherPhotos()
    {

        ob_start();

        $reponse = PhotoDB::lister();

        if ($reponse->isSuccessfull())
        {
            $listePhotos = $reponse->getData();
            foreach ($listePhotos as $photo) 
            {

                include('views\cardPhoto.php');

            }
        } 
        else
        include('views\afficherException.php');

        $content = ob_get_clean();
        include 'views/layout.php';

    }


    function afficherUnePhotos($pId)
    {

        ob_start();

        $reponse = PhotoDB::lire($pId);

        if ($reponse->isSuccessfull())
        {
            $photo = $reponse->getData();
            if ($photo)
                include 'views/vuePhoto.php';
        
            else
                include('views\photoNonTrouvee.php');
        }
        else
        include('views\afficherException.php');
        
        $content = ob_get_clean();
        include 'views/layout.php';

    }

?>