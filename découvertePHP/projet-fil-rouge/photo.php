<?php

    class Photo {

        public int $id;
        public string $titre;
        public $photos;
        public string $legend;
        public string $tag;

        public function __construct($pId,$pTitre,$pPhotos,$pLegend,$pTag) {

            $this->id = $pId;
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
