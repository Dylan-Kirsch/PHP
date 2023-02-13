<?php

    class Categorie {

        public int $id;
        public string $libelle;


        public function __construct($pId,$pLibelle) {

            $this->id = $pId;
            $this->libelle = $pLibelle;
        }

    }



?>