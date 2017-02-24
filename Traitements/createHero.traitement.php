<?php

require ("../Class/Hero.php");
$nom = $_POST['nom'];
$pdd = $_POST['pdd'];
$pdv = $_POST['pdv'];
$pda = $_POST['pda'];
$pdvit = $_POST['pdvit'];
$pdm = $_POST['pdm'];
$argent = $_POST['argent'];

$hero = new Hero($id,$nom, $pdd, $pdv, $pda, $pdvit, $pdm, $argent);
var_dump($hero);exit();
$hero->insert();

header('Location: ../index.php');

?>
