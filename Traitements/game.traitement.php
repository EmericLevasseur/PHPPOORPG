<?php
require_once ('../Class/Taverne.php');
$text ='';
$dmg ='';
$dmgsubi ='';
if(isset($_GET['id'])){
$id = $_GET['id'];
}
if(isset($_GET['idSalle'])){
  $idSalle = $_GET['idSalle'];
}

$heros = Taverne::getHero($id);

if(!empty($_GET['id']))
{
  //var_dump('ok');exit();
  $id = $_GET['id'];

  if(!empty($idSalle)){
    $coffre = Taverne::getNiveau($idSalle);
    $monstre = Taverne::getMonstre($idSalle);
  }
  if(!empty($id)){
    $heroNom = Taverne::getNom($id);
  }
  if(!empty($coffre)){
    $cle = Taverne::getCoffre($coffre);
  }

}



if(!empty($_GET['action']))
{
  switch($_GET['action'])
  {
    case('Attaquer'):
    break;
    case('Defendre'):
    echo 'Defendre';
    break;
    case('Ouvrir'):

    break;
    case('Fuir'):
    echo 'Fuir';
    break;
    case('Avancer'):
    if($idSalle == 32){
      header('Location: Views/findujeu.php');
    }
      $monstre = Taverne::getMonstre($heroNom);
      $coffre = Taverne::getNiveau($heroNom);
      $cle = Taverne::getCoffre($coffre);
    break;

  }

}

 if(!empty($monstre)){
  if($monstre['nom'] == 'Gobelin des mines')
  {
     $unMonstre = new Gobelin();

  }elseif($monstre['nom'] == 'Magicien noir')
  {
    $unMonstre = new MagicienNoir();

  }elseif($monstre['nom'] == 'Dragon des Caverne enragé')
  {
    $unMonstre = new Dragon();
  }

  if(!empty($_GET['action']) && $_GET['action'] == 'Attaquer')
    {

      $dmg      += ($heros->pda() + $heros->pdm() - $unMonstre->pdd());
      $dmgsubi  += ($unMonstre->pda() - $heros->pdd());

      if($dmgsubi < 0)
      {
        $dmgsubi = rand(1,5);
      }
      $viemonstre = ($heros->pdv() - $dmg);
      $vie = ($heros->pdv() - $dmgsubi);

    }
  if(!empty($_GET['action']) && $_GET['action'] == 'Attaquer1')
    {

      $dmg      += ($heros->pda() + $heros->pdm() - $unMonstre->pdd());
      $dmgsubi  += ($unMonstre->pda() - $heros->pdd());

      if($dmgsubi < 0)
      {
        $dmgsubi = rand(1,5);
      }
      $viemonstre = ($heros->pdv() - $dmg);
      $vie = ($heros->pdv() - $dmgsubi);


    }
  if(!empty($_GET['action']) && $_GET['action'] == 'Attaquer2')
    {

      $dmg      += ($heros->pda() + $heros->pdm() - $unMonstre->pdd());
      $dmgsubi  += ($unMonstre->pda() - $heros->pdd());
      if($dmgsubi < 0)
      {
        $dmgsubi = rand(1,5);
      }
      $viemonstre = ($heros->pdv() - $dmg);

      $vie = ($heros->pdv() - $dmgsubi);

    }

}



  if(!empty($_GET['salle']))
  {
    $text .=  'Salle observée';
  }
