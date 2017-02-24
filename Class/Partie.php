<?php
include 'Connexion.php';

class Partie
{
    private $id             ='';
    public $idpersonnage    ='';
    public $idniveau        ='';

    public function __construct($id, $idpersonnage, $idniveau ='')
    {
        $this->db           = new Connexion();
        $this->db           = $this->db->dbConnect();
        $this->id           = $id;
        $this->idpersonnage = $idpersonnage;
        $this->idniveau     = $idniveau;

    }
}
