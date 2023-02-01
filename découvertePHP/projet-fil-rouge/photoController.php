<?php

    function afficherPhotos() {

        ob_start();

        $json = file_get_contents('photos.json');
        $photoJson = json_decode($json);

        foreach($photoJson->photos as $photoJson) {

            $photo = new Photo(
                    $photoJson->titre,
                    $photoJson->photos,
                    $photoJson->legend,
                    $photoJson->tag
            );

            echo "Photo: ".$photo."<br>";

        }

        $content = ob_get_clean();
        include 'views/layout.php';

    }

?>