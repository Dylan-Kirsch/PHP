<?php

    function afficherCategorie()
    {

        ob_start();

        $reponse = CategorieDB::lister();

        if ($reponse->isSuccessfull())
        {
            $listeCategorie = $reponse->getData();
            foreach ($listeCategorie as $categorie) 
            {

                include 'views\categorieFormulaire.php';

            }
        } 
        else
        include('views\afficherException.php');

        $content = ob_get_clean();
        include 'views/layout.php';

    }


    function afficherUneCategories($pId)
    {

        ob_start();

        $reponse = CategorieDB::lire($pId);

        if ($reponse->isSuccessfull())
        {

            if ($reponse->isDataFound())
            {
                //var_dump($reponse->getdata()->offsetGet(0));
                $photo = $reponse->getData()[0];
            
                include 'views\categorieFormulaire.php';
            }
            else
                include 'views\photoNonTrouvee.php';
        }
        else
        include('views\afficherException.php');
        
        $content = ob_get_clean();
        include 'views/layout.php';

    }


    function ajouterCategorie()
    {
    // Début de la mise en cache
    ob_start();
    
    if (count($_POST)==0)
    {
        $categories = CategorieDB::lister()->getData();
        $_SESSION['codesecret']=password_hash((time()+566655545), PASSWORD_DEFAULT);
        include 'views\categorieFormulaire.php';
    }
    else
    {   
        if ($_POST['codesecret'] && $_POST['codesecret'] == $_SESSION['codesecret'])
        {
            $resultat = CategorieDB::creer($_POST);
            if ($resultat)
                include 'views\galerieAjouter.php';
            else
            {
                $utilisateurs = CategorieDB::lister()->getData();
                include 'views\categorieFormulaire.php';
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