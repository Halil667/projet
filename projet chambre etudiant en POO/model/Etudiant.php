<?php
class Etudiant extends User {
    // Attributs
    protected $class;
    
    // Constructeur
    public function __construct($row = null) {
        $this->profil = "Etudiant";
        if ($row != null) {
            $this->hydrate($row);
            $this->class = $row["class"];
        }
    }

    // Redéfinition
    public function setProfil($nom) {
        //  la fonction setProfil pour la classe Etudiant
        public function setProfil($profil) {
            if ($profil === "Etudiant") {
                $this->profil = $profil;
            } else {
                echo "Profil invalide pour un étudiant.";
            }
        }
        
    }
}
