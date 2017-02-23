<?php

include 'Connexion.php';

class Hero {

    public $nom = '';
    public $pdd = '';
    public $pdv = '';
    public $pda = '';
    public $pdvit = '';
    public $pdm = '';
    public $argent = '';
    private $id = '';

    public function __construct($nom, $pdd, $pdv, $pda, $pdvit, $pdm, $argent, $id = ''){
        $this->nom        = $nom;
        $this->pdd        = $pdd;
        $this->pdv        = $pdv;
        $this->pda        = $pda;
        $this->pdvit      = $pdvit;
        $this->pdm        = $pdm;
        $this->argent     = $argent;
        $this->id         = $id;

        $this->db = new Connexion();
        $this->db = $this->db->dbConnect();
    }

    public function insert(){

        $sql = $this->db->prepare("INSERT INTO Personnage (nom, pdd, pdv, pda, pdvit, pdm, argent)
            VALUES('$this->nom', '$this->pdd', '$this->pdv', '$this->pda', '$this->pdvit', '$this->pdm', '$this->argent')");

        $sql->execute();

    }

    public function updateHero(){

    }

    public function deleteHero(){

    }


}
