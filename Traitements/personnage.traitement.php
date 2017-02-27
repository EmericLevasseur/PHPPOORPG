<?php
require_once ('../Class/Personnage.php');




if(!empty($_POST['modifierPersonnage']) && (!empty($_GET['id']))){
    $id = $_GET['id'];
    $sPersonnge = new Personnage($id,$_POST['nom'],$_POST['pdd'],$_POST['pdv'], $_POST['pda'], $_POST['pdvit'], $_POST['pdm'], $_POST['argent']);
} elseif(!empty($_POST['modifierPersonnage'])) {
    $sPersonnage = new Personnage(null,$_POST['nom'],$_POST['pdd'],$_POST['pdv'],$_POST['pda'],$_POST['pdvit'],$_POST['pdm'],$_POST['argent']);
}
if(isset($_POST['delete']))
{
    $id = $_GET['id'];
    $personnage = new Personnage($id,null,null,null,null,null,null,null);
    $personnage->delete();


}
