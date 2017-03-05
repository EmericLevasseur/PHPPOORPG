<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Connexion.php';
require_once 'Paladin.php';
require_once 'Gobelin.php';
require_once 'Barbare.php';
require_once 'Magicien.php';
require_once 'MagicienNoir.php';
require_once 'Dragon.php';

Class Taverne
{

private $db;

  public static function getHero($id)
  {
    $db = new Connexion();
    $db = $db->dbConnect();
    $aParam = [
      ':id' => $id,
    ];
    $select = 'SELECT nom from Classe where idClasse in ( select id_classe from Personnage where idPersonnage = :id)';
    $select   = $db->prepare($select);
    $select->execute( $aParam );
    $aGetNom	=	$select->fetch();
    switch($aGetNom['nom'])
    {
      case('paladin'):
        return new Paladin($id);
        break;
      case('magicien'):
        return new Magicien($id);
        break;
      case('barbare'):
        return new Barbare($id);
        break;
      case('gobelin'):
        return new Gobelin($id);
        break;
      case('magicien noir'):
        return new MagicienNoir($id);
        break;
      case('dragon'):
        return new Dragon($id);
        break;
    }
  }
  public static function getNom($id)
  {
    $db = new Connexion();
    $db = $db->dbConnect();
    $aParam = [
      ':id' => $id,
    ];
    $sql      = 'SELECT * FROM Personnage where idPersonnage = :id';
    $oQuery   = $db->prepare($sql);
    $oQuery->execute( $aParam );
    $aGetNom	=	$oQuery->fetch();
    return $aGetNom;
  }


  public static function getNiveau($idSalle)
  {
    $db = new Connexion();
    $db = $db->dbConnect();
    $aParam = [
      ':id' => $idSalle[0].$idSalle[1],
    ];
    $sql      = 'SELECT * FROM Niveau where idNiveau = :id';
    $oQuery   = $db->prepare($sql);
    $oQuery->execute($aParam);
    $aNiveau	=	$oQuery->fetch();
    return $aNiveau;
  }

  public static function getCoffre($coffre)
  {
    $db = new Connexion();
    $db = $db->dbConnect();
    $aParam = [
      ':id' => $coffre['id_coffre'],
    ];
    $sql      = 'SELECT * FROM Coffre where idCoffre = :id';
    $oQuery   = $db->prepare($sql);
    $oQuery->execute($aParam);
    $aCoffre	=	$oQuery->fetch();
    return $aCoffre;
  }

  public static function getMonstre($idSalle)
  {
    $db = new Connexion();
    $db = $db->dbConnect();
    $aParam = [
      ':id' => $idSalle[0].$idSalle[1],
    ];
    $sql      = 'SELECT * FROM Personnage where id_niveau = :id and (id_classe = 5 or id_classe = 6 or id_classe = 7)';
    $oQuery   = $db->prepare($sql);
    $oQuery->execute($aParam);
    $aMonstre	=	$oQuery->fetch();
    return $aMonstre;
  }

  public static function updatevie()
  {
    
  }

}
