<?php

    class CategorieDB {

        static public function lister():Reponse
        {

            try 
            {
            
                $stmt = Database::getInstance()->query("SELECT * FROM CATEGORIES ;");
                $resultat = $stmt->fetchall();
                $listeCategorie= new ArrayObject();

                foreach ($resultat as $key => $value) {

                    $categorie = new Categorie(
                        $value['id'],
                        $value['libelle'],
                    );
                
                    $listeCategorie->append($categorie);

                }

                return new Reponse($listeCategorie);

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

                $stmt = Database::getInstance()->query("SELECT * FROM CATEGORIES ;");
                $value = $stmt->fetch();
                $resultat = new ArrayObject();

                if ($value!=false)
                {

                    $categorie = new Categorie(
                        $value['id'],
                        $value['libelle']
                    );

                    $resultat->append($categorie);
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
            if (!(isset($pData['libelle'])&&(strlen($pData['libelle']>5))))
                return false;

            try
            {
                $stmt = Database::getInstance()->prepare("INSERT INTO CATEGORIES (libelle, num_categorie)
                VALUES(:libelle,:idCategorie);");
                
                 $stmt->bindValue(':libelle',$pData['libelle']);
                 $stmt->bindValue(':idCategorie',$pData['idCategorie']);

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