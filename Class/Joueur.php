<?php

require_once 'Connexion.php';

class Joueur {

  public $nom;
  public $prenom;
  public $pseudo;
  public $email;
  public $descriptif;
  public $mdp;
  private $id;


    public function __construct($id = null)
    {
        $this->db = new Connexion();
        $this->db = $this->db->dbConnect();
        $this->id = $id;

        if($this->id != null){
            $sql = 'select * from Joueur where idJoueur = :id' ;
            $aParamUser				=	[
                ':id'			=>	$this->id,
            ];
            $oQuery					=	$this->db->prepare( $sql );
            $oQuery->execute( $aParamUser );
            $aUser					=	$oQuery->fetch();
        }
        $this->save();
    }

    public function getJoueur()
    {
        $sql      = 'SELECT * FROM Joueur';
        $oQuery   = $this->db->prepare($sql);
        $oQuery->execute();
        $aGetJoueur	=	$oQuery->fetchAll();
        return $aGetJoueur;

    }

    public function save()
    {
        //  global $bdd;
        if(empty($this->id) && (!empty($_POST['nom'])) && (!empty($_POST['prenom'])) && (!empty($_POST['pseudo'])) && (!empty($_POST['email'])) && (!empty($_POST['descriptif'])) && (!empty($_POST['mdp'])) ){
            //$sQuery				=	;
            $aParamUser			=	[
                ':nom'			    =>	$_POST['nom'],
                ':prenom'			=>	$_POST['prenom'],
                ':pseudo'		    =>	$_POST['pseudo'],
                ':email'			=>	$_POST['email'],
                ':descriptif'		=>	$_POST['descriptif'],
                ':mdp'			    =>	$_POST['mdp'],




            ];
            $oQuery	=	$this->db->prepare ( 'INSERT INTO `Joueur`(`nom`,`prenom`,`pseudo`,`email`,`descriptif`,`mdp`) VALUES (:nom,:prenom,:pseudo,:email,:descriptif,:mdp);' );
            $bReturn = $oQuery->execute( $aParamUser );

            if($bReturn)
            {
                header('Location: ../Views/afficherJoueur.php');
            }

        }elseif(!empty($this->id) && (!empty($_POST['nom'])) && (!empty($_POST['prenom'])) && (!empty($_POST['pseudo'])) && (!empty($_POST['email'])) && (!empty($_POST['descriptif'])) && (!empty($_POST['mdp']))){
            $aParamUser			=	[
                ':nom'			    =>	$_POST['nom'],
                ':prenom'			=>	$_POST['prenom'],
                ':pseudo'			=>	$_POST['pseudo'],
                ':email'			=>	$_POST['email'],
                ':descriptif'		=>	$_POST['descriptif'],
                ':mdp'			    =>	$_POST['mdp'],
                ':idJoueur'	        =>	$this->id,
            ];
            $oQuery	=	$this->db->prepare ( 'UPDATE Joueur SET nom = :nom, prenom = :prenom, pseudo = :pseudo, email = :email, descriptif = :descriptif, mdp = :mpd WHERE idJoueur = :idJoueur' );
            $bReturn = $oQuery->execute( $aParamUser );
            if($bReturn)
            {
                header('Location: ../Views/afficherJoueur.php');
            }

        }
    }
    public function delete()
    {
        $aParamUser			=	[
            ':id'			=>	$this->id,
        ];
        $oQuery =	$this->db->prepare ('DELETE FROM `Joueur` WHERE idJoueur = :id');
        $bReturn = $oQuery->execute( $aParamUser );

        if($bReturn)
        {
            header('Location: ../Views/afficherJoueur.php');
        }

    }



}
