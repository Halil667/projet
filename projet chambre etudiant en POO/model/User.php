<?php
class User {
    // Attributs
    protected $ID;
    protected $nom;
    protected $prenom;
    protected $MDP;
    protected $profil;

    public function __construct($row = null) {
        if ($row != null) {
            $this->hydrate($row);
        }
    }

    // Redéfinition
    public function hydrate($row) {
        $this->ID = $row["id"];
        $this->prenom = $row["prenom"];
        $this->nom = $row["nom"];
    }

    public function Restauration() {
       
    }

    public function Affichage() {
        echo "User " . $this->ID . " " . $this->prenom . " " . $this->nom;
    }

    // Getters
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getMDP() {
        return $this->MDP;
    }

    public function getID() {
        return $this->ID;
    }

    public function getProfil() {
        return $this->profil;
    }

    // Setters
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setMDP($MDP) {
        $this->MDP = $MDP;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function setProfil($profil) {
        $this->profil = $profil;
    }

    // Fonction qui retourne le nom complet
    public function getNomComplet() {
        return $this->prenom . " " . $this->nom;
    }
}
