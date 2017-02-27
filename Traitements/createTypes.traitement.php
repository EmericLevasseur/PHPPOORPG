<?php

require ("../Class/Types.php");

$nom = $_POST['nom'];

$type = new Types($nom);

$type->insert();

header('Location: ../Views/createTypes.php');

?>