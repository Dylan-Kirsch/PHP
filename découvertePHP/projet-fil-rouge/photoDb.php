<?php

    class PhotoDB
    {

        static function lister()
        {

            try 
            {
            
                $stmt = Database::getInstance()->query("select * from PHOTOS;");
                $resultat = $stmt->fetchall();
                $listePhotos = new ArrayObject();

                foreach ($resultat as $key => $value) {

                    // var_dump($value);

                    $photo = new Photo(
                        $value['id'],
                        $value['titre'],
                        $value['photo'],
                        $value['legend'],
                        $value['tag']
                    );
                
                    // var_dump($photo);
                    $listePhotos->append($photo);

                }

                return new Reponse($listePhotos);

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

                $stmt = Database::getInstance()->query('SELECT * FROM PHOTOS WHERE ID ='.$pId.";");
                $value = $stmt->fetch();

                if ($value!=false)
                {
                    $photo = new Photo(
                        $value['id'],
                        $value['titre'],
                        $value['photo'],
                        $value['legend'],
                        $value['tag']
                    );
                
                    return new Reponse($photo);
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