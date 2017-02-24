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
}
