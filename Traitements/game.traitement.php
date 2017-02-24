<?php
require_once ('../Class/Taverne.php');
$id = $_GET['id'];
$heros = Taverne::getHero($id);
