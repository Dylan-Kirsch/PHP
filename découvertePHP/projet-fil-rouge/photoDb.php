<?php

    class PhotoDB {

        static function lister() {

            $stmt = Database::getInstance()->query("select * from PHOTOS;");
            $resultat = $stmt->fetchall();
            $listePhotos = new ArrayObject();
            
            foreach ($resultat as $key => $value) {

                var_dump($value);
                $photo = new Photo($value['id'], $value['titre'], $value['photo'], $value['legend'], $value['tag']);
                var_dump($photo);
                $listePhotos->append($photo);
                
            }

            return $listePhotos;

        }


    }

?>