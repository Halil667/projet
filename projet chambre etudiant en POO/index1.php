<?php

spl_autoload_register(function ($class) {
    $path = "./model/" . $class . ".php";
    require_once($path);
});

class User {
    private $id;
    private $prenom;
    private $nom;

    public function __construct($row) {
        $this->id = $row['id'];
        $this->prenom = $row['prenom'];
        $this->nom = $row['nom'];
    }
}

class Etudiant {
    private $profile;

    public function __construct($row) {
        $this->profile = $row['profile'];
    }
}

class Batiment {
    private $id;
    private $nom;
    private $descripe;
    private $rooms;

    public function __construct($data) {
        $this->id = $data['id'];
        $this->nom = $data['nom'];
        $this->descripe = $data['descripe'];
        $this->rooms = $data['rooms'];
    }

    public function setId($id) {
        $this->id = $id;
    }
}

// Utilisation des classes
$row = [
    "id" => [222, 12, 3, 7],
    "prenom" => ["Lebron", "Freeze", "Lewis", "Joe"],
    "nom" => ["James", "Corleone", "Hamilton", "Godberg"]
];

$user1 = new User($row);
$etudiant1 = new Etudiant();
var_dump($etudiant1);

$batiment = new Batiment([
    "id" => "A",
    "nom" => "Pr ibrahima Mbaye",
    "descripe" => "Batiment A",
    "rooms" => 25
]);
$batiment->setId("4");

var_dump($batiment);

?>
