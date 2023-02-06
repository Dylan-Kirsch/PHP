<?php

    class PhotoDB
    {

        static function lister()
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

            return $listePhotos;
        }

        static function lire($pId)
        {

            if (!is_numeric($pId)||$pId<=0)
                return false;

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
            
                return $photo;
            } 
            else
            return false;
        }
    }
?>