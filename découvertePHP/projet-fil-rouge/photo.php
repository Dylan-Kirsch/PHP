<?php

    class Photo {

        public string $titre;
        public $photos;
        public string $legend;
        public string $tag;

        public function __construct($pTitre,$pPhotos,$pLegend,$pTag) {

            $this->titre = htmlentities($pTitre);
            $this->photos = htmlentities($pPhotos);
            $this->legend = htmlentities($pLegend);
            $this->tag = htmlentities($pTag);

        }

        public function __tostring() {

        return json_encode($this);

        }
    }

?>
