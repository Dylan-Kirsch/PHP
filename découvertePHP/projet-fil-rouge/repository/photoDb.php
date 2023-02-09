<?php

    class PhotoDB
    {

        static public function lister():Reponse
        {

            try 
            {
            
                $stmt = Database::getInstance()->query("select * from PHOTOS;");
                $resultat = $stmt->fetchall();
                $listePhotos = new ArrayObject();

                foreach ($resultat as $key => $value) {


                    $photo = new Photo(
                        $value['id'],
                        $value['titre'],
                        $value['photo'],
                        $value['legend'],
                        $value['tag']
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

                $stmt = Database::getInstance()->query('SELECT * FROM PHOTOS WHERE ID ='.$pId.";");
                $value = $stmt->fetch();
                $resultat = new ArrayObject();

                if ($value!=false)
                {
                    $photo = new Photo(
                        $value['id'],
                        $value['titre'],
                        $value['photo'],
                        $value['legend'],
                        $value['tag']
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
    }
?>