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
    public $classe          = '';

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
          $aParamUser			=	[

              ':classe'		=>	$_POST['classe'],


          ];
          $select = $this->db->prepare('SELECT idclasse from Classe where nom = :classe');
          $select->execute( $aParamUser );
          $aGetPersonnage	=	$select->fetch();
            $aParamUser			=	[
                ':nom'			=>	$_POST['nom'],
                ':pdd'			=>	$_POST['pdd'],
                ':pdv'		    =>	$_POST['pdv'],
                ':pda'			=>	$_POST['pda'],
                ':pdvit'		=>	$_POST['pdvit'],
                ':pdm'			=>	$_POST['pdm'],
                ':argent'		=>	$_POST['argent'],
                ':classe'		=>	$aGetPersonnage[0],


            ];

            $oQuery	=	$this->db->prepare ( 'INSERT INTO `Personnage`(`nom`,`pdd`,`pdv`,`pda`,`pdvit`,`pdm`,`argent`,`id_classe`) VALUES (:nom,:pdd,:pdv,:pda,:pdvit,:pdm,:argent,:classe);' );
            $bReturn = $oQuery->execute( $aParamUser );
            $lastId = $this->db->lastInsertId();
            if($bReturn)
            {
                header('Location: ../Views/startgame.php?id='.$lastId);
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
    public function getclass()
    {
      $aParamUser			=	[
          ':id'			=>	$this->idClasse,
      ];
      $oQuery =	$this->db->prepare ('SELECT nom from Classe where idClasse = (select id_classe from Personnage where id_classe = :id)');
      $bReturn = $oQuery->execute( $aParamUser );
      return $bReturn;
    }

    public function getNom()
    {
      $aParamUser			=	[
          ':id'			=>	$_GET['id'],
      ];

      $oQuery =	$this->db->prepare ('SELECT * from Personnage where idPersonnage =  :id');
      $oQuery->execute( $aParamUser );
      $aGetNom	=	$oQuery->fetch();
      return $aGetNom;
    }

    public function attaquer()
    {

    }

    public function observer()
    {

    }
    public function fuir()
    {

    }

    public function ouvrir()
    {

    }

    public function defendre()
    {

    }

    public function avancer()
    {

    }

}
