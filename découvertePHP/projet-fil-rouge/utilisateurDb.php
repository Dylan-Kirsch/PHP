<?php

    class UtilisateursDB
    {

        static function lister()
        {

            try 
            {
            
                $stmt = Database::getInstance()->query("select * from UTILISATEURS;");
                $resultat = $stmt->fetchall();
                $listeUtilisateur = new ArrayObject();

                foreach ($resultat as $key => $value) {

                    // var_dump($value);

                    $utilisateur = new Utilisateur(
                        $value['id'],
                        $value['nom'],
                        $value['prenom']
                    );
                
                    // var_dump($photo);
                    $listeUtilisateur->append($utilisateur);

                }

                return new Reponse($listeUtilisateur);

            }

            catch(PDOException $e)
            {

                //print_r('Gros Problème'.$e->getMessage());
                return new Reponse(false,$e);

            } 
        }


        static function lire($pId)
        {

            if (!is_numeric($pId)||$pId<=0)
                return new Reponse(false,NULL);
            
            try{

                $stmt = Database::getInstance()->query('SELECT * FROM UTILISATEURS WHERE ID ='.$pId.";");
                $value = $stmt->fetch();

                if ($value!=false)
                {
                    $utilisateur = new Utilisateur(
                        $value['id'],
                        $value['nom'],
                        $value['prenom']
                    );
                
                    return new Reponse($utilisateur);
                } 
                else
                return new Reponse(false, NULL);
            }

            catch(PDOException $e)
            {

                //print_r('Gros Problème'.$e->getMessage());
                return new Reponse(false,$e);
                
            }
        } 

    }

?>