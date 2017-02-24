<?php

Class Taverne
{

  public static function getHero($id)
  {
    $aParam = [
      ':id' => $id,
    ];
    $select = ('SELECT nom from Classe where idClasse in ( select id_classe from personnage where id_classe = :id )' );
    $select->execute( $aParam );
    $aGetNom	=	$select->fetch();

    switch($aGetNom)
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
}
