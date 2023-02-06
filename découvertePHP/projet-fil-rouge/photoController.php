<?php

    function afficherPhotos()
    {

        ob_start();

        // $json = file_get_contents('photos.json');
        // $photoJson = json_decode($json);
        // $i = 0;

        // foreach ($photoJson->photos as $photoJson) {

        //     $photo = new Photo(
        //             $i,
        //             $photoJson->titre,
        //             $photoJson->photos,
        //             $photoJson->legend,
        //             $photoJson->tag
        //     );
        //     $i++;
        //     include('views/cardPhoto.php');

        // }

        $photos = PhotoDB::lister();
        foreach ($photos as $photo) {

            $i = $photo->id;
            include('views\cardPhoto.php');

        }

        $content = ob_get_clean();
        include 'views/layout.php';

    }


    function afficherUnePhotos($pId)
    {

        ob_start();

        $json = file_get_contents('photos.json');
        $photoJson = json_decode($json);
        $photo = new Photo(
                $pId,
                $photoJson->photos[$pId]->titre,
                $photoJson->photos[$pId]->photos,
                $photoJson->photos[$pId]->legend,
                $photoJson->photos[$pId]->tag
        );

        include 'views/vuePhoto.php';
        $content = ob_get_clean();
        include 'views/layout.php';

    }

?>