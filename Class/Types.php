<?php

require_once 'Connexion.php';

class Types extends Personnage{

    public $nom = '';
    private $id = '';

    public function __construct($nom, $id = ''){
        $this->nom        = $nom;
        $this->id         = $id;

        $this->db = new Connexion();
        $this->db = $this->db->dbConnect();
    }

    public function insert(){

        $sql = $this->db->prepare("INSERT INTO Classe (nom)
            VALUES('$this->nom')");

        $sql->execute();

    }

    public function updateTypes(){

    }

    public function deleteTypes(){

    }


}
