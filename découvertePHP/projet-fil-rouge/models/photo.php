<?php

    class Photo {

        public int $id;
        public string $titre;
        public $photos;
        public string $legend;
        public string $tag;

        public Utilisateur $createur;

        public function __construct($pId,$pTitre,$pPhotos,$pLegend,$pTag,Utilisateur $pCreateur) {

            $this->id = $pId;
            $this->titre = htmlentities($pTitre);
            $this->photos = htmlentities($pPhotos);
            $this->legend = htmlentities($pLegend);
            $this->tag = htmlentities($pTag);
            $this->createur = $pCreateur;

        }

    }

?>
