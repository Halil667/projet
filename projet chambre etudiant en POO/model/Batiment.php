<?php
class Batiment implements iGestion {
    protected $id;
    protected $nom;
    protected $descripe;
    protected $nbRooms;

    public function __construct($row = null) {
        if ($row != null) {
            $this->hydrate($row);
        }
    }

    public function hydrate($row) {
        $this->id = $row["id"];
        $this->nom = $row["nom"];
        $this->descripe = $row["descripe"];
        $this->nbRooms = $row["rooms"];   
    }

    public function Affichage() {
        echo "Bat " . $this->id . " " . $this->nom;
    }

    // Getter
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getDescripe() {
        return $this->descripe;
    }

    public function getNbRooms() {
        return $this->nbRooms;
    }

    // Setter
    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setDescripe($descripe) {
        $this->descripe = $descripe;
    }

    public function setNbRooms($nbRooms) {
        $this->nbRooms = $nbRooms;
    }
}
