<?php

    class UtilisateursDB
    {

        static public function lister():Reponse
        {

            try 
            {
            
                $stmt = Database::getInstance()->query("select * from UTILISATEURS;");
                $resultat = $stmt->fetchall();
                $listeUtilisateur = new ArrayObject();

                foreach ($resultat as $key => $value) {

                    $utilisateur = new Utilisateur(
                        $value['id'],
                        $value['nom'],
                        $value['prenom']
                    );
                
                    $listeUtilisateur->append($utilisateur);

                }

                return new Reponse($listeUtilisateur);

            }

            catch(PDOException $e)
            {

                return new Reponse(new ArrayObject(),$e);

            } 
        }


        static public function lire(int $pId):Reponse
        {

            if (!is_numeric($pId)||$pId<=0)
                return new Reponse(new ArrayObject());
            
            try{

                $stmt = Database::getInstance()->query('SELECT * FROM UTILISATEURS WHERE ID ='.$pId.";");
                $value = $stmt->fetch();
                $resultat = new ArrayObject();

                if ($value!=false)
                {
                    $utilisateur = new Utilisateur(
                        $value['id'],
                        $value['nom'],
                        $value['prenom']
                    );
                    
                    $resultat->append($utilisateur);
                    return new Reponse($resultat);
                } 
                else
                return new Reponse(new ArrayObject());
            }

            catch(PDOException $e)
            {

                return new Reponse(new ArrayObject(),$e);
                
            }
        } 

    }

?>