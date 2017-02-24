<?php
require_once ('../Class/Taverne.php');

if(!empty($_GET['id']))
{
  $id = $_GET['id'];

  $heroNom = Taverne::getNom($id);
  echo $heroNom['nom'];
  echo '</br>';
  echo '</br>';
  $heros = Taverne::getHero($id);
   echo 'Points d\'attaque : ' . $heros->pda();
   echo '</br>';
   echo 'Points de défense : ' . $heros->pdd();
   echo '</br>';
   echo 'Points de magie : ' . $heros->pdm();
}

if(!empty($_GET['action']))
{
  switch($_GET['action'])
  {
    case('Observer'):
    echo 'Observer';
    break;
    case('Attaquer'):
    echo 'Attaquer';
    break;
    case('Defendre'):
    echo 'Defendre';
    break;
    case('Ouvrir'):
    echo 'Ouvrir';
    break;
    case('Fuir'):
    echo 'Fuir';
    break;
    case('Avancer'):
    echo 'Avancer';
    break;

  }
}
