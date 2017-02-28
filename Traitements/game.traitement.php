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
   echo 'Points d\'attaque : '; if(!empty($heros->pda())){ echo $heros->pda(); }else{echo 0;}
   echo '</br>';
   echo 'Points de défense : '; if(!empty($heros->pdd())){ echo $heros->pdd(); }else{echo 0;}
   echo '</br>';
   echo 'Points de magie : '; if(null == $heros->pdm()){ echo $heros->pdm(); }else{echo 0;}
}else{
    header('Location: createHero.php');
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
