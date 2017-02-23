<?php
require_once ('../Class/Niveau.php');




if(!empty($_POST['modifierNiveau']) && (!empty($_GET['id']))){
  $id = $_GET['id'];
  $sNiveau = new Niveau($id,$_POST['numeroSalle'],$_POST['porte'],$_POST['id_coffre']);
} elseif(!empty($_POST['modifierNiveau'])) {
  $sNiveau = new Niveau(null,$_POST['numeroSalle'],$_POST['porte'],$_POST['id_coffre']);
}
if(isset($_POST['delete']))
{
  $id = $_GET['id'];
  $niveau = new Niveau($id,null,null,null);
  $niveau->delete();


}
