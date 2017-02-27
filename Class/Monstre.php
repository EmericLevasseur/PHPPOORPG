<?php

require_once 'Connexion.php';

class Monstre {

    public $nom = '';
    public $pdd = '';
    public $pdv = '';
    public $pda = '';
    public $pdvit = '';
    private $id = '';

    public function __construct($nom, $pdd, $pdv, $pda, $pdvit, $id = ''){
        $this->nom        = $nom;
        $this->pdd        = $pdd;
        $this->pdv        = $pdv;
        $this->pda        = $pda;
        $this->pdvit      = $pdvit;
        $this->id         = $id;

        $this->db = new Connexion();
        $this->db = $this->db->dbConnect();
    }

    public function insert(){

        $sql = $this->db->prepare("INSERT INTO Personnage (nom, pdd, pdv, pda, pdvit,)
            VALUES('$this->nom', '$this->pdd', '$this->pdv', '$this->pda', '$this->pdvit')");

        $sql->execute();

    }

    public function updateMonstre(){

    }

    public function deleteMonstre(){

        $req = $bdd->prepare('DELETE FROM Personnage WHERE idPersonnage=' . $_GET['id']);
        $req->execute(array($_POST['idMonstre']));
    }


}
