<?php
require_once ('../Class/Niveau.php');

if(!empty($_POST['modifierNiveau'])){
  $sNiveau = new Niveau(null,$_POST['numeroSalle'],$_POST['porte'],$_POST['id_coffre']);
}
