<?php

require ("../Class/Hero.php");

$nom = $_POST['nom'];
$classe = $_POST['classe'];



$hero = new Hero($nom, $classe);
$hero->insert();
