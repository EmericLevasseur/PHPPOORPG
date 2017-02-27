<?php
require_once 'Connexion.php';

class Personnage
{
    private $id             ='';
    public $nom             = '';
    public $pdd             = '';
    public $pdv             = '';
    public $pda             = '';
    public $pdvit           = '';
    public $pdm             = '';
    public $argent          = '';

    // Déclarations des constantes en rapport avec la force.

    const FORCE_Guerrier = 50;
    const FORCE_Paladin = 40;

    const DEFENSE_Guerrier = 50;
    const DEFENSE_Magicien = 50;
    const DEFENSE_Paladin = 20;

    const MAGIE_Magicien = 50;
    const MAGIE_Paladin = 40;


    public function __construct($id = null)
    {
        $this->db = new Connexion();
        $this->db = $this->db->dbConnect();
        $this->id = $id;

        if($this->id != null){
            $sql = 'select * from Personnage where idPersonnage = :id' ;
            $aParamUser				=	[
                ':id'			=>	$this->id,
            ];
            $oQuery					=	$this->db->prepare( $sql );
            $oQuery->execute( $aParamUser );
            $aUser					=	$oQuery->fetch();
        }
        $this->save();
    }
    public function getPersonnage()
    {
        $sql      = 'SELECT * FROM Personnage';
        $oQuery   = $this->db->prepare($sql);
        $oQuery->execute();
        $aGetPersonnage	=	$oQuery->fetchAll();
        return $aGetPersonnage;

    }


    public function save()
    {
        //  global $bdd;
        if(empty($this->id) && (!empty($_POST['nom'])) && (!empty($_POST['pdd'])) && (!empty($_POST['pdv'])) && (!empty($_POST['pda'])) && (!empty($_POST['pdvit'])) && (!empty($_POST['pdm'])) && (!empty($_POST['argent']))){
            //$sQuery				=	;
            $aParamUser			=	[
                ':nom'			=>	$_POST['nom'],
                ':pdd'			=>	$_POST['pdd'],
                ':pdv'		    =>	$_POST['pdv'],
                ':pda'			=>	$_POST['pda'],
                ':pdvit'		=>	$_POST['pdvit'],
                ':pdm'			=>	$_POST['pdm'],
                ':argent'		=>	$_POST['argent'],


            ];
            $oQuery	=	$this->db->prepare ( 'INSERT INTO `Personnage`(`nom`,`pdd`,`pdv`,`pda`,`pdvit`,`pdm`,`argent`) VALUES (:nom,:pdd,:pdv,:pda,:pdvit,:pdm,:argent);' );
            $bReturn = $oQuery->execute( $aParamUser );

            if($bReturn)
            {
                header('Location: ../Views/afficherPersonnage.php');
            }

        }elseif(!empty($this->id) && (!empty($_POST['nom'])) && (!empty($_POST['pdd'])) && (!empty($_POST['pdv'])) && (!empty($_POST['pda'])) && (!empty($_POST['pdvit'])) && (!empty($_POST['pdm'])) && (!empty($_POST['argent']))){
            $aParamUser			=	[
                ':nom'			=>	$_POST['nom'],
                ':pdd'			=>	$_POST['pdd'],
                ':pdv'			=>	$_POST['pdv'],
                ':pda'			=>	$_POST['pda'],
                ':pdvit'		=>	$_POST['pdvit'],
                ':pdm'			=>	$_POST['pdm'],
                ':argent'		=>	$_POST['argent'],
                ':idPersonnage'	=>	$this->id,
            ];
            $oQuery	=	$this->db->prepare ( 'UPDATE Personnage SET nom = :nom, pdd = :pdd, pdv = :pdv, pda = :pda, pdvit = :pdvit, pdm = :pdm, argent = :argent WHERE idPersonnage = :idPersonnage' );
            $bReturn = $oQuery->execute( $aParamUser );
            if($bReturn)
            {
                header('Location: ../Views/afficherPersonnage.php');
            }

        }
    }
    public function delete()
    {
        $aParamUser			=	[
            ':id'			=>	$this->id,
        ];
        $oQuery =	$this->db->prepare ('DELETE FROM `Personnage` WHERE idPersonnage = :id');
        $bReturn = $oQuery->execute( $aParamUser );
        if($bReturn)
        {
            header('Location: ../Views/afficherPersonnage.php');
        }
    }

    public function attaquer()
    {
<<<<<<< HEAD
        $degats = Force_Personnnage - Defense_Personnage;
=======

    }
>>>>>>> origin/master

        return $degats;

    }
}
