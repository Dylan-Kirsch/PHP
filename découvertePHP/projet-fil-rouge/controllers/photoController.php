<?php

    function afficherPhotos()
    {

        ob_start();

        $reponse = PhotoDB::lister();

        if ($reponse->isSuccessfull())
        {
            $listePhotos = $reponse->getData();

            if ($listePhotos)
                {
                    foreach ($listePhotos as $key=>$photo) 

                    {
                if ($key == 0)
                    $active = "active";
                            else
                        $active ="";
                        include('views\slidePhoto.php');
                    } 
                    $images = ob_get_clean();
                    ob_start();
                    include('views\caroussel.php');
                }
                
                else
                    include 'views\photoNonTrouvee.php';
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

            if ($reponse->isDataFound())
            {
                //var_dump($reponse->getdata()->offsetGet(0));
                $photo = $reponse->getData()[0];
            
                include 'views/vuePhoto.php';
            }
            else
                include 'views\photoNonTrouvee.php';
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
        include 'views\formulaire.php';
    }
    else
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

    $content = ob_get_clean();
    // fin mise en cache et affichage du layout avec la vue
    include 'views/layout.php';
    }

?>