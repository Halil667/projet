<?php
class Admin extends User {
    // Constructeur
    public function __construct($row = null) {
        $this->profil = "Admin";
        if ($row != null) {
            $this->hydrate($row);
        }
    }

    // Redéfinition
    public function setProfil($profil) {
        // Code de la fonction setProfil pour la classe Admin
        public function setProfil($profil) {
            if ($profil === "Admin") {
                $this->profil = $profil;
            } else {
                // Si y'a une erreur ou une condition invalide
                echo "Profil invalide pour un administrateur.";
            }
        }
        
    }
}
