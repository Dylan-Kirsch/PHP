<?php

    class Utilisateur 
    {

        public int $id;
        public string $nom;

        public string $prenom;

        public function __construct($pId,$pNom,$pPrenom)
        {

            $this->id = $pId;
            $this->nom = htmlentities($pNom);
            $this->prenom = htmlentities($pPrenom);

        }

    }



?>