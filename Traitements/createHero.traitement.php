<?php

<<<<<<< Updated upstream
require ("../Class/Hero.php");

$nom = $_POST['nom'];
$pdd = $_POST['pdd'];
$pdv = $_POST['pdv'];
$pda = $_POST['pda'];
$pdvit = $_POST['pdvit'];
$pdm = $_POST['pdm'];
$or = $_POST['argent'];

$hero = new Hero($nom, $pdd, $pdv, $pda, $pdvit, $pdm, $argent);

$hero->insert();
=======
require_once ("../Class/Personnage.php");

$nom = $_POST['nom'];
$classe = $_POST['classe'];

$hero = new Personnage($id,$nom, $classe);
$hero->save();
>>>>>>> Stashed changes


?>
