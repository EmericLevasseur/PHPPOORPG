<?php

include 'Connexion.php';

class Hero {

    public $nom = '';
    public $classe = '';

    public function __construct($nom, $classe,$niveau, $id = ''){
        $this->nom        = $nom;
        $this->classe     = $classe;
        $this->id         = $id;
        $this->db = new Connexion();
        $this->db = $this->db->dbConnect();
    }

    public function insert()
    {
        $aParamUser				=	[
            ':nom'			=>	$this->classe,
        ];
        $sql = "SELECT idclasse from Classe where nom = :nom";
        $oQuery					=	$this->db->prepare( $sql );
        $oQuery->execute( $aParamUser );
        $aUser					=	$oQuery->fetch();

        $sql = $this->db->prepare("INSERT INTO Personnage (nom, id_classe, id_niveau)
            VALUES('$this->nom', '$aUser[0]', '22')");
        $sql->execute();

        $recup = $this->db->prepare('SELECT * FROM `Niveau` LIMIT 1');
        $recup->execute();
        $aSalle					=	$recup->fetch();

        $recup = $this->db->prepare('SELECT idPersonnage FROM `Personnage` ORDER BY `idPersonnage` DESC LIMIT 1');
        $recup->execute();
        $aUser					=	$recup->fetch();
        if($aUser)
        {
          header('Location: ../Views/startgame.php?id='. $aUser[0] .'&idSalle=22&action=');
        }

    }

    public function updateHero(){

    }

    public function deleteHero(){

    }


}
