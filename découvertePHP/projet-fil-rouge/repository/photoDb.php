<?php

    class PhotoDB
    {

        static public function lister():Reponse
        {

            try 
            {
            
                $stmt = Database::getInstance()->query("SELECT *, utilisateurs.id as 'idUtilisateur',photos.id as 'idphotos' FROM PHOTOS,UTILISATEURs WHERE UTILISATEURs.ID = PHOTOS.num_utilisateur;");
                $resultat = $stmt->fetchall();
                $listePhotos = new ArrayObject();

                foreach ($resultat as $key => $value) {

                    $utilisateur = new Utilisateur(
                        $value['id'], 
                        $value['nom'], 
                        $value['prenom']
                    );

                    $photo = new Photo(
                        $value['id'],
                        $value['titre'],
                        $value['photo'],
                        $value['legend'],
                        $value['tag'],
                        $utilisateur
                    );
                
                    $listePhotos->append($photo);

                }

                return new Reponse($listePhotos);

            }

            catch(PDOException $e)
            {

                //print_r('Gros Problème'.$e->getMessage());
                return new Reponse(new ArrayObject(),$e);

            }

            
        }

        static public function lire(int $pId):Reponse
        {

            if (!is_numeric($pId)||$pId<=0)
                return new Reponse(new ArrayObject());
            
            try{

                $stmt = Database::getInstance()->query("SELECT *, utilisateurs.id as 'idUtilisateur',photos.id as 'idphotos' FROM PHOTOS,UTILISATEURs WHERE UTILISATEURs.ID = PHOTOS.num_utilisateur AND PHOTOS.ID =".$pId.";");
                $value = $stmt->fetch();
                $resultat = new ArrayObject();

                if ($value!=false)
                {

                    $utilisateur = new Utilisateur(
                        $value['id'], 
                        $value['nom'], 
                        $value['prenom']
                    );

                    // var_dump($utilisateur);

                    $photo = new Photo(
                        $value['id'],
                        $value['titre'],
                        $value['photo'],
                        $value['legend'],
                        $value['tag'],
                        $utilisateur
                    );

                    $resultat->append($photo);
                    return new Reponse($resultat);
                } 
                else
                return new Reponse(new ArrayObject());
            }

            catch(PDOException $e)
            {

                print_r('Gros Problème'.$e->getMessage());
                return new Reponse(new ArrayObject(),$e);
                
            }
        }
        
        static public function creer($pData):bool
        {
        
        //  array(6) { ["titre"]=> string(28) "ffffffffffffffffffffffffffff" ["photo"]=> string(9) "yjè(j(j(" ["legend"]=> string(7) ",jhgfcx" ["tag"]=> string(6) "bygvcd" ["idUtilisateur"]=> string(1) "1" ["codesecret"]=> string(60)
            if (!(isset($pData['titre'])&&(strlen($pData['titre'])>5)))
                return false;
                if (!(isset($pData['legend'])&&(strlen($pData['legend'])>5)))
                return false;
                if (!(isset($pData['photo'])&&(strlen($pData['photo'])>5)))
                return false;
                if (!(isset($pData['tag'])&&(strlen($pData['tag'])>5)))
                return false;
                if (!(isset($pData['idUtilisateur'])&& is_numeric($pData['idUtilisateur'])))
                return false;

            try
            {
                $stmt = Database::getInstance()->prepare("INSERT INTO PHOTOS (titre,legend,photo,tag,num_utilisateur)
                VALUES(:titre,:legend,:photo,:tag,:idUtilisateur);");
                
                 $stmt->bindValue(':titre',$pData['titre']);
                 $stmt->bindValue(':legend',$pData['legend']);
                 $stmt->bindValue(':photo',$pData['photo']);
                 $stmt->bindValue(':tag',$pData['tag']);
                 $stmt->bindValue(':idUtilisateur',$pData['idUtilisateur']);

                return $stmt->execute();
            }

            catch (PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
            
        }
    }
?>