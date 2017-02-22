<?php

require ("../Class/Monstre.php");

$nom = $_POST['nom'];
$pdd = $_POST['pdd'];
$pdv = $_POST['pdv'];
$pda = $_POST['pda'];
$pdvit = $_POST['pdvit'];

$monstre = new Monstre($nom, $pdd, $pdv, $pda, $pdvit);

$monstre->insert();

header('Location: ../Views/createMonstre.php');

?>
