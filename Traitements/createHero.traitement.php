<?php

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

header('Location: ../index.php');

?>
