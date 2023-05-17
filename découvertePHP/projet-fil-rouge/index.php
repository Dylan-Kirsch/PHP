<?php

    require_once('config\config.php');
    require_once('repository\database.php');
    require_once('repository\reponse.php');
    require_once('repository\photoDb.php');
    require_once('models\photo.php');
    require_once('models\categorie.php');
    require_once('repository\categorieDb.php');
    require_once('controllers\categorieController.php');
    require('repository\utilisateurDb.php');
    require('models\utilisateur.php');
    require_once('controllers\photoController.php');
    require_once('controllers\utilisateurController.php');



    session_start();

    if (isset($_GET['page']))
                $page = $_GET['page'];
            else
                $page = 'photo';

    switch($page)
    {

        case 'photo':

            if (isset($_GET['id'])) 
                afficherUnePhotos($_GET['id']);
            else
                afficherPhotos();
            break;

        // case 'utilisateur':

        //     if (isset($_GET['id']))
        //         afficherUnUtilisateur($_GET['id']);
        //     else
        //         afficherUtilisateurs();
        //     break;

        // case 'ajouter-galerie':
        //         ajouterGalerie();
        //     break;

        // case 'categorie':

        //     if (isset($_GET['id'])) 
        //         afficherUneCategories($_GET['id']);
        //     else
        //         afficherCategorie();
        //     break;
        // case 'ajouter-categorie':
        //         ajouterCategorie();
        // break;

        default:
            afficherPhotos();
        break;

        

    }

    
?>
